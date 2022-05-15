<?php

namespace App\Http\Controllers;
use App\Models\Porteur;
use App\Models\Potentiel;
use App\Http\Requests\StorePotentielRequest;
use App\Http\Requests\UpdatePotentielRequest;

class PotentielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    public function filters(){
        $porteur = Porteur::all();
        return $porteur;
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
        'croissance_marche'=>$request->croissance_marché,
        //pot equipe
        'propre_patron'=>$request->propre_patron,
        'Exercer_passion'=>$request->Exercer_passion,
        'Améliorer_revenus'=>$request->Ameliorer_revenus,
        'formaliser_activite'=>$request->formaliser_activite,
        'independent_financierement'=>$request->independent_financierement,
        'defis'=>$request->défis,
        //determination de l'entrepreneur
        'decisions_judicieuses'=>$request->decisions_judicieuses,
        'realisation_objectifs'=>$request->realisation_objectifs,
        'prendre_risques'=>$request->prendre_risques,

        'porteur_id'=>$request->porteur_id,
      
    ]);
    return PotentielResource($potentiel) ;
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
