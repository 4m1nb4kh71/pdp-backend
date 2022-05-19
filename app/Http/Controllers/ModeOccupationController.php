<?php

namespace App\Http\Controllers;

use App\Models\ModeOccupation;
use App\Http\Requests\StoreModeOccupationRequest;
use App\Http\Requests\UpdateModeOccupationRequest;
use App\Http\Resources\ModeOccupationResource;

class ModeOccupationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $modeoccupations = ModeOccupation::all();
        return $modeoccupations;
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
     * @param  \App\Http\Requests\StoreModeOccupationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModeOccupationRequest $request)
    {
        //
        $modeoccupation = ModeOccupation::create([
            
            'nom'=>$request->nom,
           
            ]);
        return new ModeOccupationResource($modeoccupation);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModeOccupation  $modeOccupation
     * @return \Illuminate\Http\Response
     */
    public function show(ModeOccupation $modeOccupation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModeOccupation  $modeOccupation
     * @return \Illuminate\Http\Response
     */
    public function edit(ModeOccupation $modeOccupation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModeOccupationRequest  $request
     * @param  \App\Models\ModeOccupation  $modeOccupation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModeOccupationRequest $request, ModeOccupation $modeOccupation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModeOccupation  $modeOccupation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModeOccupation $modeOccupation)
    {
        //
    }
}
