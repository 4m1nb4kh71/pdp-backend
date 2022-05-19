<?php

namespace App\Http\Controllers;

use App\Models\Faisabilite;
use App\Http\Requests\StoreFaisabiliteRequest;
use App\Http\Requests\UpdateFaisabiliteRequest;
use App\Http\Resources\FaisabiliteResource;

class FaisabiliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faisabilites = Faisabilite::all();
        return $faisabilites;
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
     * @param  \App\Http\Requests\StoreFaisabiliteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaisabiliteRequest $request)
    {
        //
        $faisabilite = Faisabilite::create([
            'solution_id'=>$request->solution_id,
            'description'=>$request->description,
           
            ]);
        return new FaisabiliteResource($faisabilite);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faisabilite  $faisabilite
     * @return \Illuminate\Http\Response
     */
    public function show(Faisabilite $faisabilite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faisabilite  $faisabilite
     * @return \Illuminate\Http\Response
     */
    public function edit(Faisabilite $faisabilite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFaisabiliteRequest  $request
     * @param  \App\Models\Faisabilite  $faisabilite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFaisabiliteRequest $request, Faisabilite $faisabilite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faisabilite  $faisabilite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faisabilite $faisabilite)
    {
        //
    }
}
