<?php

namespace App\Http\Controllers;

use App\Models\PlanFinancement;
use App\Http\Requests\StorePlanFinancementRequest;
use App\Http\Requests\UpdatePlanFinancementRequest;
use App\Http\Resources\PlanFinancementResource;


class PlanFinancementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $planfinancements = PlanFinancement::all();
        return $planfinancements;
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
     * @param  \App\Http\Requests\StorePlanFinancementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlanFinancementRequest $request)
    {
        //
        //
        $planfinancement = PlanFinancement::create([
            'viabilite_id'=>$request->viabilite_id,
            'nom'=>$request->nom,
            'prix'=>$request->prix,

            
            
            
            ]);
        return new PlanFinancementResource($planfinancement);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlanFinancement  $planFinancement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planfinancement = PlanFinancement::where("viabilite_id",$id)->get();
        return $planfinancement;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlanFinancement  $planFinancement
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanFinancement $planFinancement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlanFinancementRequest  $request
     * @param  \App\Models\PlanFinancement  $planFinancement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlanFinancementRequest $request, PlanFinancement $planFinancement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlanFinancement  $planFinancement
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanFinancement $planFinancement)
    {
        //
    }
}
