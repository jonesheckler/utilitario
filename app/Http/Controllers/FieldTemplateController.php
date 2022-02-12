<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFieldTemplateRequest;
use App\Http\Requests\UpdateFieldTemplateRequest;
use App\Models\FieldTemplate;

class FieldTemplateController extends Controller
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
     * @param  \App\Http\Requests\StoreFieldTemplateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFieldTemplateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FieldTemplate  $fieldTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(FieldTemplate $fieldTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FieldTemplate  $fieldTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(FieldTemplate $fieldTemplate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFieldTemplateRequest  $request
     * @param  \App\Models\FieldTemplate  $fieldTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFieldTemplateRequest $request, FieldTemplate $fieldTemplate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FieldTemplate  $fieldTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(FieldTemplate $fieldTemplate)
    {
        //
    }
}
