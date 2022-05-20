<?php

namespace App\Http\Controllers;

use App\Models\Complementaire;
use App\Http\Requests\StoreComplementaireRequest;
use App\Http\Requests\UpdateComplementaireRequest;
use App\Http\Resources\ComplementaireResource;

class ComplementaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        //
                $complementaires = Complementaire::all();
                return $complementaires;
      
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
     * @param  \App\Http\Requests\StoreComplementaireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComplementaireRequest $request)
    {
        //
        $complementaire = Complementaire::create([
            'nom'=>$request->nom,
           
            ]);
        return new ComplementaireResource($complementaire);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Complementaire  $complementaire
     * @return \Illuminate\Http\Response
     */
    public function show(Complementaire $complementaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Complementaire  $complementaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Complementaire $complementaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComplementaireRequest  $request
     * @param  \App\Models\Complementaire  $complementaire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComplementaireRequest $request, Complementaire $complementaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Complementaire  $complementaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complementaire $complementaire)
    {
        //
    }
}
