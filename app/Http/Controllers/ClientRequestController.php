<?php

namespace App\Http\Controllers;

use App\Models\ClientRequest;
use Illuminate\Http\Request;

class ClientRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client_requests = ClientRequest::latest()->get();
        return view('backend.client_requests.index', compact('client_requests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientRequest  $clientRequest
     * @return \Illuminate\Http\Response
     */
    public function show(ClientRequest $clientRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientRequest  $clientRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientRequest $clientRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientRequest  $clientRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientRequest $clientRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientRequest  $clientRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientRequest $clientRequest)
    {
        $clientRequest->destroy($clientRequest->id);

        notify()->success('The client request has been removed from our records.');

        return redirect()->back()->with('success', "The client request has been removed from our records.");
    }
}
