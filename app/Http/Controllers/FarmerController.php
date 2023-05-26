<?php

namespace App\Http\Controllers;

use App\Http\Requests\FarmerRequest;
use App\Models\Farmer;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farmers = Farmer::latest()->get();
        // withTrashed()
        return view('backend.farmers.index', compact('farmers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.farmers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FarmerRequest $request)
    {
        $validated = $request->validated();

        $farmer = Farmer::latest('id')->first();

        $kisan_id = $farmer != null ? ($farmer->kisan_id != null ? (int) $farmer->kisan_id + 1 : 10000) : 10000;

        $mergredRequest = $request->all();

        // Uploading kisan photo
        if (isset($request->photo) && $request->photo != null) {
            $mergredRequest['photo'] = photo_upload($request->photo, $kisan_id, 'kisan/images');
        }

        // Uploading kisan aadhar card
        if (isset($request->aadhaar_card) && $request->aadhaar_card != null) {
            $mergredRequest['aadhaar_card'] = photo_upload($request->aadhaar_card, $kisan_id, 'kisan/aadhaar_cards');
        }

        $mergredRequest['kisan_id'] = (int) $kisan_id;

        $farmer = Farmer::create($mergredRequest);

        notify()->success('Farmer has been added successfully.');

        return redirect()->back()
            // ->route('farmers.index')
            ->withInput();
        // ->with('success', 'farmer has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function show(Farmer $farmer)
    {
        return view('backend.farmers.show', compact('farmer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function edit(Farmer $farmer)
    {
        return view('backend.farmers.edit', compact('farmer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function update(FarmerRequest $request, Farmer $farmer)
    {
        $validated = $request->validated();

        $mergredRequest = $request->all();

        // Uploading kisan photo
        if (isset($request->photo) && $request->photo != null) {
            $mergredRequest['photo'] = photo_upload($request->photo, $farmer->kisan_id, 'kisan/images', $farmer->photo);
        }

        // Uploading kisan aadhar card
        if (isset($request->aadhaar_card) && $request->aadhaar_card != null) {
            $mergredRequest['aadhaar_card'] = photo_upload($request->aadhaar_card, $farmer->kisan_id, 'kisan/aadhaar_cards', $farmer->aadhaar_card);
        }

        $farmer->update($mergredRequest);

        notify()->success($farmer->name . ' (' . $farmer->kisan_id . ') ' . 'records has been updated successfully.');

        return redirect()->route('farmers.index')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farmer $farmer)
    {
        $name = $farmer->name . ' (' . $farmer->kisan_id . ')';
        $farmer->destroy($farmer->id);
        notify()->success($name . ' records removed successfully.');
        return redirect()->back();
    }
}
