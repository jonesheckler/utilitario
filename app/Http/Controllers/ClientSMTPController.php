<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientSMTPRequest;
use App\Http\Requests\UpdateClientSMTPRequest;
use App\Models\ClientSMTP;

class ClientSMTPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreClientSMTPRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientSMTPRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientSMTP  $clientSMTP
     * @return \Illuminate\Http\Response
     */
    public function show(ClientSMTP $clientSMTP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientSMTP  $clientSMTP
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientSMTP $clientSMTP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientSMTPRequest  $request
     * @param  \App\Models\ClientSMTP  $clientSMTP
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientSMTPRequest $request, ClientSMTP $clientSMTP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientSMTP  $clientSMTP
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientSMTP $clientSMTP)
    {
        //
    }
}
