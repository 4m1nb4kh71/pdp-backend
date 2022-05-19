<?php

namespace App\Http\Controllers;

use App\Models\SolutionItem;
use App\Http\Requests\StoreSolutionItemRequest;
use App\Http\Requests\UpdateSolutionItemRequest;
use App\Models\Solution;
use App\Http\Resources\SolutionItemResource;

class SolutionItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $solutionitems = SolutionItem::all();
            return $solutionitems;
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
     * @param  \App\Http\Requests\StoreSolutionItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSolutionItemRequest $request)
    {
        
              //
              $solutionitem = SolutionItem::create([
                'solution_id'=>$request->solution_id,
                'type_solution_id'=>$request->type_solution_id,
               
                'description'=>$request->description,
                
                
                ]);
            return new SolutionItemResource($solutionitem);
    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SolutionItem  $solutionItem
     * @return \Illuminate\Http\Response
     */
    public function show(SolutionItem $solutionItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SolutionItem  $solutionItem
     * @return \Illuminate\Http\Response
     */
    public function edit(SolutionItem $solutionItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSolutionItemRequest  $request
     * @param  \App\Models\SolutionItem  $solutionItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSolutionItemRequest $request, SolutionItem $solutionItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SolutionItem  $solutionItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(SolutionItem $solutionItem)
    {
        //
    }
}
