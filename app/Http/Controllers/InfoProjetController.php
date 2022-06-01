<?php

namespace App\Http\Controllers;

use App\Models\InfoProjet;
use App\Http\Requests\StoreInfoProjetRequest;
use App\Http\Requests\UpdateInfoProjetRequest;
use App\Http\Resources\InfoProjetResource;
use App\Models\Implantation;

class InfoProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $infoprojets = Implantation::all();
        return $infoprojets;
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
     * @param  \App\Http\Requests\StoreInfoProjetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInfoProjetRequest $request)
    {
        //
        $infoprojet = InfoProjet::create([
            'viabilite_id'=>$request->viabilite_id,
         
            'ressource_financement'=>$request->ressource_financement,
            'programme_investissement'=>$request->programme_investissement,
            'processus_producion_fabrication'=>$request->processus_producion_fabrication,
      
            ]);
        return new InfoProjetResource($infoprojet);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InfoProjet  $infoProjet
     * @return \Illuminate\Http\Response
     */
    public function show(InfoProjet $infoProjet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InfoProjet  $infoProjet
     * @return \Illuminate\Http\Response
     */
    public function edit(InfoProjet $infoProjet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInfoProjetRequest  $request
     * @param  \App\Models\InfoProjet  $infoProjet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInfoProjetRequest $request, InfoProjet $infoProjet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InfoProjet  $infoProjet
     * @return \Illuminate\Http\Response
     */
    public function destroy(InfoProjet $infoProjet)
    {
        //
    }
}
