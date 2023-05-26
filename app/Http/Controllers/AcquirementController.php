<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcquirementRequest;
use App\Models\Acquirement;
use App\Models\Farmer;
use Illuminate\Http\Request;

class AcquirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acquirements = Acquirement::with('farmer')
            ->latest()
            ->get();
        // dd($acquirements);
        // withTrashed()
        return view('backend.acquirements.index', compact('acquirements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $farmers = Farmer::get();
        return view('backend.acquirements.create', compact('farmers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcquirementRequest $request)
    {
        $validated = $request->validated();

        $mergredRequest = $request->all();

        // Uploading kisan photo
        if (isset($request->rst_file) && $request->rst_file != null) {
            $mergredRequest['rst_file'] = photo_upload($request->rst_file, $request->farmer_id, 'kisan/rst');
        }

        $mergredRequest['user_id'] = auth()->id();

        $acquirement = Acquirement::create($mergredRequest);

        notify()->success('New acquirement added successfully.');

        return redirect()->route('acquirements.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acquirement  $acquirement
     * @return \Illuminate\Http\Response
     */
    public function show(Acquirement $acquirement)
    {
        return view('backend.acquirements.show', compact('acquirement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acquirement  $acquirement
     * @return \Illuminate\Http\Response
     */
    public function edit(Acquirement $acquirement)
    {
        $farmers = Farmer::latest()->get();
        return view('backend.acquirements.edit', compact('acquirement', 'farmers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acquirement  $acquirement
     * @return \Illuminate\Http\Response
     */
    public function update(AcquirementRequest $request, Acquirement $acquirement)
    {
        $validated = $request->validated();

        $mergredRequest = $request->all();

        // Uploading kisan photo
        if (isset($request->rst_file) && $request->rst_file != null) {
            $mergredRequest['rst_file'] = photo_upload($request->rst_file, $request->farmer_id, 'kisan/rst', $acquirement->rst_file);
        }

        $acquirement = $acquirement->update($mergredRequest);

        notify()->success('Acquirement has been updated successfully.');

        return redirect()->route('acquirements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acquirement  $acquirement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acquirement $acquirement)
    {
        $message = 'RST -' . $acquirement->rst . ' of ' . $acquirement->farmer->name . ' (' . $acquirement->farmer->kisan_id . ')';

        $acquirement->destroy($acquirement->id);
        notify()->success($message . ' records removed successfully.');
        return redirect()->back();
    }
}
