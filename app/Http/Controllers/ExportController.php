<?php

namespace App\Http\Controllers;

use App\Http\Resources\SolutionResource;
use App\Models\Associe;
use App\Models\Potentiel;
use App\Models\Projet;
use App\Models\Solution;
use App\Models\Viabilite;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $associes= Associe::where("projet_id",$id)->take(3)->get();
        $projet= Projet::findOrFail($id);
        $potentiel= Potentiel::where("projet_id",$id)->first();

        $solution= Solution::where("projet_id",$id)->first();
        $solutionitem= $solution->solutionitem;
        $fournisseurs= Viabilite::where("projet_id",$id)->first()->fournisseur;
        $viabilite= Viabilite::where("projet_id",$id)->first();
        $clients= Viabilite::where("projet_id",$id)->first()->client;
        $concurrents= Viabilite::where("projet_id",$id)->first()->concurrent;
        $programmeinvestissement= Viabilite::where("projet_id",$id)->first()->programmeinvestissement;
        $planfinancement= Viabilite::where("projet_id",$id)->first()->planfinancement;
        $chiffreaffaire= Viabilite::where("projet_id",$id)->first()->chiffreaffaire;

        return (object) [
            'associes'=>$associes,
            'projet'=>$projet,
            'potentiel'=>$potentiel,
            'solution'=>(Object)[
                'besoin_identifie'=>new SolutionResource($solution),
                'solution_propose'=>$solutionitem,
            ],
            'viabilite'=>(Object)[
                'viabilite'=>$viabilite,
                'clients'=>$clients,
                'fournisseurs'=>$fournisseurs,
                'concurrents'=>$concurrents,
                'programme_investissement'=>$programmeinvestissement,
                'plan_financement'=>$planfinancement,
                'chiffre_affaire'=>$chiffreaffaire,
                
            ],
           
            
           
            
        ];

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
