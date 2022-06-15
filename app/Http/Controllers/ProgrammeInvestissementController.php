<?php

namespace App\Http\Controllers;

use App\Models\ProgrammeInvestissement;
use App\Http\Requests\StoreProgrammeInvestissementRequest;
use App\Http\Requests\UpdateProgrammeInvestissementRequest;
use App\Http\Resources\ProgrammeInvestissementResource;

class ProgrammeInvestissementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $programmeinvestissements = programmeinvestissement::all();
        return $programmeinvestissements;
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
     * @param  \App\Http\Requests\StoreProgrammeInvestissementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProgrammeInvestissementRequest $request)
    {
        //
        $programmeinvestissement = ProgrammeInvestissement::create([
            'viabilite_id'=>$request->viabilite_id,
            'nom'=>$request->nom,
            'prix'=>$request->prix,
    
            
            
            ]);
        return new ProgrammeInvestissementResource($programmeinvestissement);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProgrammeInvestissement  $programmeInvestissement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programmeinvess = ProgrammeInvestissement::where("viabilite_id",$id)->get();
        return $programmeinvess;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProgrammeInvestissement  $programmeInvestissement
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgrammeInvestissement $programmeInvestissement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProgrammeInvestissementRequest  $request
     * @param  \App\Models\ProgrammeInvestissement  $programmeInvestissement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProgrammeInvestissementRequest $request, $id)
    {
        $proginvess = ProgrammeInvestissement::find($id);
        if($proginvess)
        {
            $proginvess->update([
             'viabilite_id'=>$request->viabilite_id,
            'nom'=>$request->nom,
            'prix'=>$request->prix,
            ]);
        }
        else{
           ProgrammeInvestissement::create([
            'viabilite_id'=>$request->viabilite_id,
            'nom'=>$request->nom,
            'prix'=>$request->prix,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProgrammeInvestissement  $programmeInvestissement
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        ProgrammeInvestissement::whereNotNull('id')->delete();
    }
}
