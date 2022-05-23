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
use App\Models\Estimation;
use App\Models\Echelle;
use App\Models\ModeOccupation;
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

    public function filter_estim(){
        $estimation = Estimation::all();
        return $estimation;
    }

    public function filters_estimf(){
        $estimationfournisseur = EstimationFournisseur::all();
        return $estimationfournisseur;
    }

    public function filters_estimco(){
        $estimationconcurrent = EstimationConcurrent::all();
        return $estimationconcurrent;
    }
    
    public function filter_estimcl(){
        $estimationclient = EstimationClient::all();
        return $estimationclient;
    }
    public function filter_echelle(){
        $echelle = Echelle::all();
        return $echelle;
    }
    public function filter_mode_ocuupation(){
        $modeoccupation = ModeOccupation::all();
        return $modeoccupation;
    }
   

    public function filters(){
        $estimation = $this->filter_estim();
        $estimationfournisseur = $this->filters_estimf();
        $estimationconcurrent = $this->filters_estimco();
        $estimationclient = $this->filter_estimcl();
        $echelle = $this->filter_echelle();
        $modeoccupation = $this->filter_mode_ocuupation();
        return [
            'filter_estim'=>$estimation,
            'filters_estimf'=>$estimationfournisseur,
            'filters_estimco'=>$estimationconcurrent,
            'filter_estimcl'=>$estimationclient,
            'filter_echelle'=>$echelle,
            'filter_mode_ocuupation'=>$modeoccupation
        ];
    }

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