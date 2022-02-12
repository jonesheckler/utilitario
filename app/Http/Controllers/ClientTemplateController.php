<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientTemplateRequest;
use App\Http\Requests\UpdateClientTemplateRequest;
use App\Models\ClientTemplate;

class ClientTemplateController extends Controller
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
     * @param  \App\Http\Requests\StoreClientTemplateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientTemplateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientTemplate  $clientTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(ClientTemplate $clientTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientTemplate  $clientTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientTemplate $clientTemplate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientTemplateRequest  $request
     * @param  \App\Models\ClientTemplate  $clientTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientTemplateRequest $request, ClientTemplate $clientTemplate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientTemplate  $clientTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientTemplate $clientTemplate)
    {
        //
    }
}
