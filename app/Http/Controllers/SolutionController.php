<?php

namespace App\Http\Controllers;
use App\Models\SolutionItem;
use App\Models\Solution;
use App\Models\Projet;
use App\Models\Faisabilite;
use App\Models\Originalite;
use App\Models\Marche;
use App\Http\Requests\StoreSolutionRequest;
use App\Http\Requests\UpdateSolutionRequest;
use App\Http\Resources\SolutionResource;
use App\Models\TypeSolution;
use Carbon\Carbon;



class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function filters1(){
        $solutionitems = SolutionItem::all();
        return $solutionitems;
    }

    public function filters2(){
        $faisabilites = Faisabilite::all();
        return $faisabilites;
    }

    public function filters3(){
        $originalites = Originalite::all();
        return $originalites;
    }
    
    public function filters4(){
        $marches = Marche::all();
        return $marches;
    }
    public function type_solution(){
        $type = TypeSolution::all();
        return $type;
    }

    public function filters(){
        $realisme = $this->filters2();
        $originalite = $this->filters3();
        $marche = $this->filters4();
        $type = $this->type_solution();
        return [
            'realisme_filters'=>$realisme,
            'originalite_filters'=>$originalite,
            'marche_filters'=>$marche,
            'type_solution'=>$type
        ];
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
            'faisabilite_id'=>$request->faisabilite_id,
            'originalite_id'=>$request->originalite_id,
            'marche_id'=>$request->marche_id,
            'description_besoin'=>$request->description_besoin,
            
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
    public function show($id)
    {
        $solution = Solution::where("projet_id",$id)->get();
        return $solution;
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
