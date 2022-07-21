<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrCvetRequest;
use App\Http\Requests\UpdatePrCvetRequest;
use App\Models\PrCvet;

class PrCvetController extends Controller
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
     * @param  \App\Http\Requests\StorePrCvetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrCvetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrCvet  $prCvet
     * @return \Illuminate\Http\Response
     */
    public function show(PrCvet $prCvet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrCvet  $prCvet
     * @return \Illuminate\Http\Response
     */
    public function edit(PrCvet $prCvet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrCvetRequest  $request
     * @param  \App\Models\PrCvet  $prCvet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrCvetRequest $request, PrCvet $prCvet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrCvet  $prCvet
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrCvet $prCvet)
    {
        //
    }
}
