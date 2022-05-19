<?php

namespace App\Http\Controllers;

use App\Models\EstimationClient;
use App\Http\Requests\StoreEstimationClientRequest;
use App\Http\Requests\UpdateEstimationClientRequest;
use App\Http\Resources\EstimationClientResource;

class EstimationClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estimationclients = EstimationClient::all();
        return $estimationclients;
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
     * @param  \App\Http\Requests\StoreEstimationClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstimationClientRequest $request)
    {
        //
        $estimationclient = EstimationClient::create([
            'solution_id'=>$request->solution_id,
            'description'=>$request->description,
           
            ]);
        return new EstimationClientResource($estimationclient);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EstimationClient  $estimationClient
     * @return \Illuminate\Http\Response
     */
    public function show(EstimationClient $estimationClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EstimationClient  $estimationClient
     * @return \Illuminate\Http\Response
     */
    public function edit(EstimationClient $estimationClient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstimationClientRequest  $request
     * @param  \App\Models\EstimationClient  $estimationClient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstimationClientRequest $request, EstimationClient $estimationClient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstimationClient  $estimationClient
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstimationClient $estimationClient)
    {
        //
    }
}
