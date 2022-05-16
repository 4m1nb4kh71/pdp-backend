<?php

namespace App\Http\Controllers;

use App\Models\Motivation;
use App\Http\Requests\StoreMotivationRequest;
use App\Http\Requests\UpdateMotivationRequest;
use App\Http\Resources\MotivationResource;


class MotivationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motivations = Motivation::all();
        return $motivations;

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
     * @param  \App\Http\Requests\StoreMotivationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMotivationRequest $request)
    {
        //
        $motivation = Motivation::create([
           // 'potentiel_id'=>$request->potentiel_id,
            'etat'=>$request->etat,
           
            ]);
        return new MotivationResource($motivation);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function show(Motivation $motivation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function edit(Motivation $motivation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMotivationRequest  $request
     * @param  \App\Models\Motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMotivationRequest $request, Motivation $motivation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motivation $motivation)
    {
        //
    }
}
