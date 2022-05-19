<?php

namespace App\Http\Controllers;

use App\Models\EstimationConcurrent;
use App\Http\Requests\StoreEstimationConcurrentRequest;
use App\Http\Requests\UpdateEstimationConcurrentRequest;
use App\Http\Resources\EstimationConcurrentResource;

class EstimationConcurrentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estimationconcurrents = EstimationConcurrent::all();
        return $estimationconcurrents;
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
     * @param  \App\Http\Requests\StoreEstimationConcurrentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstimationConcurrentRequest $request)
    {
        //
        $estimationconcurrent = EstimationConcurrent::create([
           
            'nom'=>$request->description,
           
            ]);
        return new EstimationConcurrentResource($estimationconcurrent);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EstimationConcurrent  $estimationConcurrent
     * @return \Illuminate\Http\Response
     */
    public function show(EstimationConcurrent $estimationConcurrent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EstimationConcurrent  $estimationConcurrent
     * @return \Illuminate\Http\Response
     */
    public function edit(EstimationConcurrent $estimationConcurrent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstimationConcurrentRequest  $request
     * @param  \App\Models\EstimationConcurrent  $estimationConcurrent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstimationConcurrentRequest $request, EstimationConcurrent $estimationConcurrent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstimationConcurrent  $estimationConcurrent
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstimationConcurrent $estimationConcurrent)
    {
        //
    }
}
