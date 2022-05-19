<?php

namespace App\Http\Controllers;

use App\Models\Originalite;
use App\Http\Requests\StoreOriginaliteRequest;
use App\Http\Requests\UpdateOriginaliteRequest;
use App\Http\Resources\OriginaliteResource;


class OriginaliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $originalites = Originalite::all();
        return $originalites;
       
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
     * @param  \App\Http\Requests\StoreOriginaliteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOriginaliteRequest $request)
    {
        //
        $originalite= Originalite::create([
            'solution_id'=>$request->solution_id,
            'description'=>$request->description,
           
            ]);
        return new OriginaliteResource($originalite);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Originalite  $originalite
     * @return \Illuminate\Http\Response
     */
    public function show(Originalite $originalite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Originalite  $originalite
     * @return \Illuminate\Http\Response
     */
    public function edit(Originalite $originalite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOriginaliteRequest  $request
     * @param  \App\Models\Originalite  $originalite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOriginaliteRequest $request, Originalite $originalite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Originalite  $originalite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Originalite $originalite)
    {
        //
    }
}
