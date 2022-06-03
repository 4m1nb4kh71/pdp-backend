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
        $projet= Projet::find($id)->first();
        $potentiel= Potentiel::where("projet_id",$id)->first();

        $solution= Solution::where("projet_id",$id)->first();
        $solutionitem= $solution?->solutionitem;
        $viabilite= Viabilite::where("projet_id",$id)->first();
        $fournisseurs=  $viabilite?->fournisseur;
      
        $clients= $viabilite?->client;
        $concurrents= $viabilite?->concurrent;
        $programmeinvestissement= $viabilite?->programmeinvestissement;
        $planfinancement= $viabilite?->planfinancement;
        $chiffreaffaire= $viabilite?->chiffreaffaire;

        return (object) [
            'associes'=>$associes,
            'projet'=>$projet,
            'potentiel'=>$potentiel,
            'solution'=>(Object)[
                'besoin_identifie'=>$solution?new SolutionResource($solution):null,
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
