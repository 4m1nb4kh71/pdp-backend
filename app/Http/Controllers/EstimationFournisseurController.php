<?php

namespace App\Http\Controllers;

use App\Models\EstimationFournisseur;
use App\Http\Requests\StoreEstimationFournisseurRequest;
use App\Http\Requests\UpdateEstimationFournisseurRequest;
use App\Http\Resources\EstimationFournisseurResource;

class EstimationFournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estimationfournisseurs = EstimationFournisseur::all();
        return $estimationfournisseurs;
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
     * @param  \App\Http\Requests\StoreEstimationFournisseurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstimationFournisseurRequest $request)
    {
        //
        $estimationfournisseur = EstimationFournisseur::create([
           
            'description'=>$request->description,
           
            ]);
        return new EstimationFournisseurResource($estimationfournisseur);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EstimationFournisseur  $estimationFournisseur
     * @return \Illuminate\Http\Response
     */
    public function show(EstimationFournisseur $estimationFournisseur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EstimationFournisseur  $estimationFournisseur
     * @return \Illuminate\Http\Response
     */
    public function edit(EstimationFournisseur $estimationFournisseur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstimationFournisseurRequest  $request
     * @param  \App\Models\EstimationFournisseur  $estimationFournisseur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstimationFournisseurRequest $request, EstimationFournisseur $estimationFournisseur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstimationFournisseur  $estimationFournisseur
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstimationFournisseur $estimationFournisseur)
    {
        //
    }
}
