<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrCollectionRequest;
use App\Http\Requests\UpdatePrCollectionRequest;
use App\Models\PrCollection;

class PrCollectionController extends Controller
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
     * @param  \App\Http\Requests\StorePrCollectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrCollectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrCollection  $prCollection
     * @return \Illuminate\Http\Response
     */
    public function show(PrCollection $prCollection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrCollection  $prCollection
     * @return \Illuminate\Http\Response
     */
    public function edit(PrCollection $prCollection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrCollectionRequest  $request
     * @param  \App\Models\PrCollection  $prCollection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrCollectionRequest $request, PrCollection $prCollection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrCollection  $prCollection
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrCollection $prCollection)
    {
        //
    }
}
