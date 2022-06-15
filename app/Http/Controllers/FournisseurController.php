<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use App\Http\Requests\StoreFournisseurRequest;
use App\Http\Requests\UpdateFournisseurRequest;
use App\Http\Resources\FournisseurResource;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            //
            $fournisseurs = Fournisseur::all();
            return $fournisseurs;
    
        
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
     * @param  \App\Http\Requests\StoreFournisseurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFournisseurRequest $request)
    {
        //
        $fournisseur = Fournisseur::create([
            'viabilite_id'=>$request->viabilite_id,
            'echelle_id'=>$request->echelle_id,
            'nom'=>$request->nom,
      
            ]);
        return new FournisseurResource($fournisseur);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fournisseurs = Fournisseur::where("viabilite_id",$id)->get();
        return $fournisseurs;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function edit(Fournisseur $fournisseur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFournisseurRequest  $request
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFournisseurRequest $request,$id)
    {
        $fournisseur = Fournisseur::find($id);
        if($fournisseur)
        {
            $fournisseur->update([
                'viabilite_id'=>$request->viabilite_id,
                'echelle_id'=>$request->echelle_id,
                'nom'=>$request->nom,
            ]);
        }
        else{
           Fournisseur::create([
            'viabilite_id'=>$request->viabilite_id,
            'echelle_id'=>$request->echelle_id,
            'nom'=>$request->nom,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        Fournisseur::whereNotNull('id')->delete();
    }
}
