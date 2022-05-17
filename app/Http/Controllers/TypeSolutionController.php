<?php

namespace App\Http\Controllers;

use App\Models\TypeSolution;
use App\Http\Requests\StoreTypeSolutionRequest;
use App\Http\Requests\UpdateTypeSolutionRequest;

class TypeSolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $typesolutions = TypeSolution::all();
        return $typesolutions;
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
     * @param  \App\Http\Requests\StoreTypeSolutionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeSolutionRequest $request)
    {
        //
        $typesolution = TypeSolution::create([
          
            'type'=>$request->type,
           
            
            
            ]);
        return new TypeSolutionResource($typesolution);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeSolution  $typeSolution
     * @return \Illuminate\Http\Response
     */
    public function show(TypeSolution $typeSolution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeSolution  $typeSolution
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeSolution $typeSolution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeSolutionRequest  $request
     * @param  \App\Models\TypeSolution  $typeSolution
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeSolutionRequest $request, TypeSolution $typeSolution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeSolution  $typeSolution
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeSolution $typeSolution)
    {
        //
    }
}
