<?php

namespace App\Http\Controllers;

use App\Models\Concurrent;
use App\Http\Requests\StoreConcurrentRequest;
use App\Http\Requests\UpdateConcurrentRequest;
use App\Http\Resources\ConcurrentResource;

class ConcurrentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $concurrents = Concurrent::all();
        return $concurrents;
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
     * @param  \App\Http\Requests\StoreConcurrentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConcurrentRequest $request)
    {
        //
        $concurrent = Concurrent::create([
            'viabilite_id'=>$request->viabilite_id,
            'echelle_id'=>$request->echelle_id,
            'nom'=>$request->nom,
            ]);
        return new ConcurrentResource($concurrent);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Concurrent  $concurrent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $concurrents = Concurrent::where("viabilite_id",$id)->get();
        return $concurrents;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Concurrent  $concurrent
     * @return \Illuminate\Http\Response
     */
    public function edit(Concurrent $concurrent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConcurrentRequest  $request
     * @param  \App\Models\Concurrent  $concurrent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConcurrentRequest $request, Concurrent $concurrent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Concurrent  $concurrent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concurrent $concurrent)
    {
        //
    }
}
