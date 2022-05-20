<?php

namespace App\Http\Controllers;
use App\Models\Porteur;
use App\Models\Potentiel;
use App\Models\Projet;
use App\Http\Requests\StorePotentielRequest;
use App\Http\Requests\UpdatePotentielRequest;
use App\Http\Resources\PotentielResource;
use App\Models\Motivation;
use Carbon\Carbon;

class PotentielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    public function filtersA(){
        $motivation = Motivation::all();
        return $motivation;
    }
    
    public function filtersB(){
        $determination = Determination::all();
        return $determination;
    }
    
    public function filtersC(){
        $complementaire = Complementaire::all();
        return $complementaire;
    }
    
 

    public function index()
    {
        $potentiel = Potentiel::all();
        return $potentiel;
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
     * @param  \App\Http\Requests\StorePotentielRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePotentielRequest $request)
    {
        $potentiel = Potentiel::create([
        //
        //dev pot projet
        'scalabilite_adaptabilite'=>$request->scalabilite_adaptabilite,
        'attractivite_territoir_emplacement'=>$request->attractivite_territoir_emplacement,
        'croissance_marche'=>$request->croissance_marche,
        //pot equipe
        'propre_patron'=>$request->propre_patron,
        'Exercer_passion'=>$request->Exercer_passion,
        'Ameliorer_revenus'=>$request->Ameliorer_revenus,
        'formaliser_activite'=>$request->formaliser_activite,
        'independent_financierement'=>$request->independent_financierement,
        'defis'=>$request->defis,
        //determination de l'entrepreneur
        'decisions_judicieuses'=>$request->decisions_judicieuses,
        'realisation_objectifs'=>$request->realisation_objectifs,
        'prendre_risques'=>$request->prendre_risques,

        'projet_id'=>$request->projet_id,
        'motivation_id'=>$request->motivation_id,
        'complementaire_id'=>$request->complementaire_id,
        'determination_id'=>$request->determination_id,

        'creation_date'=>new Carbon($request->creation_date) ,
      
    ]);
    return new PotentielResource($potentiel) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Potentiel  $potentiel
     * @return \Illuminate\Http\Response
     */
    public function show(Potentiel $potentiel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Potentiel  $potentiel
     * @return \Illuminate\Http\Response
     */
    public function edit(Potentiel $potentiel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePotentielRequest  $request
     * @param  \App\Models\Potentiel  $potentiel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePotentielRequest $request, Potentiel $potentiel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Potentiel  $potentiel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Potentiel $potentiel)
    {
        //
    }
}
