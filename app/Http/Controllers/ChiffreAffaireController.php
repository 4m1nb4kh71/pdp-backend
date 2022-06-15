<?php

namespace App\Http\Controllers;

use App\Models\ChiffreAffaire;
use App\Http\Requests\StoreChiffreAffaireRequest;
use App\Http\Requests\UpdateChiffreAffaireRequest;
use App\Http\Resources\ChiffreAffaireResource;

class ChiffreAffaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chiffreaffaires = ChiffreAffaire::all();
        return $chiffreaffaires;
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
     * @param  \App\Http\Requests\StoreChiffreAffaireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChiffreAffaireRequest $request)
    {
        //
        $chiffreaffaire = ChiffreAffaire::create([
            'viabilite_id'=>$request->viabilite_id,
            'nom'=>$request->nom,
            'prix_unitaire'=>$request->prix_unitaire,
            'quantite_vendu'=>$request->quantite_vendu,
            'total'=>$request->total,
           
            
            ]);
        return new ChiffreAffaireResource($chiffreaffaire);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChiffreAffaire  $chiffreAffaire
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ca = ChiffreAffaire::where("viabilite_id",$id)->get();
        return $ca;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChiffreAffaire  $chiffreAffaire
     * @return \Illuminate\Http\Response
     */
    public function edit(ChiffreAffaire $chiffreAffaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChiffreAffaireRequest  $request
     * @param  \App\Models\ChiffreAffaire  $chiffreAffaire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChiffreAffaireRequest $request,$id)
    {
        $ca = ChiffreAffaire::find($id);
        if($ca)
        {
            $ca->update([
            'viabilite_id'=>$request->viabilite_id,
            'nom'=>$request->nom,
            'prix_unitaire'=>$request->prix_unitaire,
            'quantite_vendu'=>$request->quantite_vendu,
            'total'=>$request->total,
            ]);
        }
        else{
           ChiffreAffaire::create([
            'viabilite_id'=>$request->viabilite_id,
            'nom'=>$request->nom,
            'prix_unitaire'=>$request->prix_unitaire,
            'quantite_vendu'=>$request->quantite_vendu,
            'total'=>$request->total,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChiffreAffaire  $chiffreAffaire
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        ChiffreAffaire::whereNotNull('id')->delete();
    }
}
