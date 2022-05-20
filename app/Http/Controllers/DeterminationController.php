<?php

namespace App\Http\Controllers;

use App\Models\Determination;
use App\Http\Requests\StoreDeterminationRequest;
use App\Http\Requests\UpdateDeterminationRequest;
use App\Http\Resources\DeterminationResource;

class DeterminationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $determinations = Determination::all();
        return $determinations;
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
     * @param  \App\Http\Requests\StoreDeterminationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeterminationRequest $request)
    {
        //
        $determination = Determination::create([
            // 'potentiel_id'=>$request->potentiel_id,
             'nom'=>$request->nom,
            
             ]);
         return new DeterminationResource($determination);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Determination  $determination
     * @return \Illuminate\Http\Response
     */
    public function show(Determination $determination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Determination  $determination
     * @return \Illuminate\Http\Response
     */
    public function edit(Determination $determination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeterminationRequest  $request
     * @param  \App\Models\Determination  $determination
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeterminationRequest $request, Determination $determination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Determination  $determination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Determination $determination)
    {
        //
    }
}
