<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Solution;
use App\Models\Projet;
use App\Http\Requests\StoreSolutionRequest;
use App\Http\Requests\UpdateSolutionRequest;
use App\Http\Resources\SolutionResource;
use Carbon\Carbon;



class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function filters(){
        $items = Item::all();
        return $items;
    }

    public function index()
    {
        //
        $solutions = Solution::all();
        return $solutions;
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
     * @param  \App\Http\Requests\StoreSolutionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSolutionRequest $request)
    {
        $solution = Solution::create([
            'projet_id'=>$request->projet_id,
            'description_besoin'=>$request->description_besoin,
            'faisabilite'=>$request->faisabilite,
            'originalite'=>$request->originalite,
            'marche'=>$request->marche,
            'creation_date'=>new Carbon($request->creation_date) ,
           // 'item_id'=>$request->item_id,
        ]);
        return new SolutionResource($solution);
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function show(Solution $solution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function edit(Solution $solution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSolutionRequest  $request
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSolutionRequest $request, Solution $solution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solution $solution)
    {
        //
    }
}
