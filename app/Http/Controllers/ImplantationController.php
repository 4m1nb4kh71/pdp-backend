<?php

namespace App\Http\Controllers;

use App\Models\Implantation;
use App\Http\Requests\StoreImplantationRequest;
use App\Http\Requests\UpdateImplantationRequest;
use App\Http\Resources\ImplantationResource;

class ImplantationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $implantations = Implantation::all();
        return $implantations;
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
     * @param  \App\Http\Requests\StoreImplantationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImplantationRequest $request)
    {
        //
        $implantation = Implantation::create([
            'viabilite_id' => $request->viabilite_id,
            'modeoccupation_id' => $request->modeoccupation_id,
            'adresse' => $request->adresse,
            'montant_loyer' => $request->montant_loyer,

        ]);
        return new ImplantationResource($implantation);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Implantation  $implantation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $impli = Implantation::where("viabilite_id", $id)->get();
        return $impli;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Implantation  $implantation
     * @return \Illuminate\Http\Response
     */
    public function edit(Implantation $implantation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImplantationRequest  $request
     * @param  \App\Models\Implantation  $implantation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImplantationRequest $request, Implantation $implantation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Implantation  $implantation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Implantation $implantation)
    {
        //
    }
}
