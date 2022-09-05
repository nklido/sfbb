<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStreetNumberRequest;
use App\Http\Requests\UpdateStreetNumberRequest;
use App\Models\StreetNumber;

class StreetNumberController extends Controller
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
     * @param  \App\Http\Requests\StoreStreetNumberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStreetNumberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StreetNumber  $streetNumber
     * @return \Illuminate\Http\Response
     */
    public function show(StreetNumber $streetNumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StreetNumber  $streetNumber
     * @return \Illuminate\Http\Response
     */
    public function edit(StreetNumber $streetNumber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStreetNumberRequest  $request
     * @param  \App\Models\StreetNumber  $streetNumber
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStreetNumberRequest $request, StreetNumber $streetNumber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StreetNumber  $streetNumber
     * @return \Illuminate\Http\Response
     */
    public function destroy(StreetNumber $streetNumber)
    {
        //
    }
}
