<?php

namespace App\Http\Controllers;

use App\Models\Echelle;
use App\Http\Requests\StoreEchelleRequest;
use App\Http\Requests\UpdateEchelleRequest;
use App\Http\Resources\EchelleResource;


class EchelleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $echelles = Echelle::all();
        return $echelles;
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
     * @param  \App\Http\Requests\StoreEchelleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEchelleRequest $request)
    {
        //
        {
            //
            $echelle = Echelle::create([
              
                'nom'=>$request->nom,
               
                
                
                ]);
            return new EchelleResource($echelle);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Echelle  $echelle
     * @return \Illuminate\Http\Response
     */
    public function show(Echelle $echelle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Echelle  $echelle
     * @return \Illuminate\Http\Response
     */
    public function edit(Echelle $echelle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEchelleRequest  $request
     * @param  \App\Models\Echelle  $echelle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEchelleRequest $request, Echelle $echelle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Echelle  $echelle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Echelle $echelle)
    {
        //
    }
}
