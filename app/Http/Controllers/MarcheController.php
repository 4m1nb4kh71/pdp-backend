<?php

namespace App\Http\Controllers;

use App\Models\Marche;
use App\Http\Requests\StoreMarcheRequest;
use App\Http\Requests\UpdateMarcheRequest;
use App\Http\Resources\MarcheResource;


class MarcheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $marches = Marche::all();
        return $marches;
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
     * @param  \App\Http\Requests\StoreMarcheRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMarcheRequest $request)
    {
        //
        $marche = Marche::create([
            'solution_id'=>$request->solution_id,
            'description'=>$request->description,
           
            ]);
        return new MarcheResource($marche);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marche  $marche
     * @return \Illuminate\Http\Response
     */
    public function show(Marche $marche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marche  $marche
     * @return \Illuminate\Http\Response
     */
    public function edit(Marche $marche)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMarcheRequest  $request
     * @param  \App\Models\Marche  $marche
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMarcheRequest $request, Marche $marche)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marche  $marche
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marche $marche)
    {
        //
    }
}
