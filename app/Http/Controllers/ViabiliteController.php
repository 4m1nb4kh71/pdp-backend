<?php

namespace App\Http\Controllers;

use App\Models\Viabilite;
use App\Http\Requests\StoreViabiliteRequest;
use App\Http\Requests\UpdateViabiliteRequest;
use App\Http\Resources\ViabiliteResource;
use App\Models\Projet;
use Carbon\Carbon;


class ViabiliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $viabilite = Viabilite::all();
        return $viabilite;
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
     * @param  \App\Http\Requests\StoreViabiliteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreViabiliteRequest $request)
    {
        //
        $viabilite = Viabilite::create([
            'projet_id'=>$request->projet_id,
            'estimationclient_id'=>$request->estimationclient_id,
            'estimationconcurrent_id'=>$request->estimationconcurrent_id,
            'estimationfournisseur_id'=>$request->estimationfournisseur_id,
            'estimation_id'=>$request->estimation_id,
            
            'creation_date'=>new Carbon($request->creation_date) ,
           // 'item_id'=>$request->item_id,
        ]);
        return new ViabiliteResource($viabilite);
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Viabilite  $viabilite
     * @return \Illuminate\Http\Response
     */
    public function show(Viabilite $viabilite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Viabilite  $viabilite
     * @return \Illuminate\Http\Response
     */
    public function edit(Viabilite $viabilite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateViabiliteRequest  $request
     * @param  \App\Models\Viabilite  $viabilite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateViabiliteRequest $request, Viabilite $viabilite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Viabilite  $viabilite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Viabilite $viabilite)
    {
        //
    }
}
