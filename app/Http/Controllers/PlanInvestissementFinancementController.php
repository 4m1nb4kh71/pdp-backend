<?php

namespace App\Http\Controllers;

use App\Models\PlanInvestissementFinancement;
use App\Http\Requests\StorePlanInvestissementFinancementRequest;
use App\Http\Requests\UpdatePlanInvestissementFinancementRequest;
use App\Http\Resources\StorePlanInvestissementFinancementResource;

class PlanInvestissementFinancementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $planinvestissementfinancements = StorePlanInvestissementFinancement::all();
        return $planinvestissementfinancements;
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
     * @param  \App\Http\Requests\StorePlanInvestissementFinancementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlanInvestissementFinancementRequest $request)
    {
        //
        $planinvestissementfinancement = StorePlanInvestissementFinancement::create([
            'viabilite_id'=>$request->viabilite_id,
            'programme_invetissement'=>$request->programme_invetissement,
            'plan_financement'=>$request->plan_financement,
            
            
            ]);
        return new StorePlanInvestissementFinancementResource($planinvestissementfinancement);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlanInvestissementFinancement  $planInvestissementFinancement
     * @return \Illuminate\Http\Response
     */
    public function show(PlanInvestissementFinancement $planInvestissementFinancement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlanInvestissementFinancement  $planInvestissementFinancement
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanInvestissementFinancement $planInvestissementFinancement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlanInvestissementFinancementRequest  $request
     * @param  \App\Models\PlanInvestissementFinancement  $planInvestissementFinancement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlanInvestissementFinancementRequest $request, PlanInvestissementFinancement $planInvestissementFinancement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlanInvestissementFinancement  $planInvestissementFinancement
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanInvestissementFinancement $planInvestissementFinancement)
    {
        //
    }
}
