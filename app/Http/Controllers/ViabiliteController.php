<?php

namespace App\Http\Controllers;

use App\Models\Viabilite;
use App\Http\Requests\StoreViabiliteRequest;
use App\Http\Requests\UpdateViabiliteRequest;
use App\Http\Resources\ViabiliteResource;
use App\Models\Echelle;
use App\Models\Estimation;
use App\Models\ModeOccupation;
use App\Models\Projet;
use App\Models\EstimationClient;
use App\Models\EstimationConcurrent;
use App\Models\EstimationFournisseur;
use Carbon\Carbon;


class ViabiliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */ 
    public function index()
    {
        //
        $viabilite = Viabilite::all();
        return $viabilite;
    }
    public function echellefilter(){
        $echelles = Echelle::all();
       
        return $echelles;
    }
    public function implantationfilter(){
        $modeoccupations = ModeOccupation::all();
        return $modeoccupations;
    }
    public function Estimationfilter(){
        $estimations = Estimation::all();
        return $estimations;
    }
    public function filters(){
        $echelles = $this->echellefilter();
        $modeoccupations =$this->implantationfilter();
        $estimations=$this->Estimationfilter();
        return [
            'echelle_filters'=>$echelles,
            'modeoccupation_filters'=>$modeoccupations,
            'estimation_filters'=>$estimations
        ];
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
            'ca_estimation'=>$request->ca_estimation,
            'financement_estimation'=>$request->financement_estimation,
            'investissement_estimation'=>$request->investissement_estimation,
            'fournisseur_estimation'=>$request->fournisseur_estimation,
            'concurrent_estimation'=>$request->concurrent_estimation,
            'client_estimation'=>$request->client_estimation,
            'estimationconcurrent_id'=>$request->estimationconcurrent_id, 
            'nombrepostecrees'=>$request->nombrepostecrees,
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
    public function show($id)
    {
        $viabilite = Viabilite::where("projet_id",$id)->get();
        return $viabilite;
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