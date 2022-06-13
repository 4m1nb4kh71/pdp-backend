<?php

namespace App\Http\Controllers;

use App\Models\Associe;
use App\Http\Requests\StoreAssocieRequest;
use App\Http\Requests\UpdateAssocieRequest;
use App\Models\Expduration;
use Carbon\Carbon;
class AssocieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function filters(){
        $expduration = Expduration::all();
        return $expduration;
    }
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreAssocieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssocieRequest $request)
    {
        //
        
        // $date_naissance = new Carbon($request->date_naissance) ;
        // $age = Carbon::parse($date_naissance)->age ;
        $associe = Associe::create([
            'projet_id'=>$request->projet_id,
            'nom'=>$request->nom,
            'date_naissance'=>new Carbon($request->date_naissance=='null'?now():$request->date_naissance) ,
            'prenom'=>$request->prenom,
            'expduration_id'=>$request->expduration_id,
            'type'=>$request->type,
            'expfield'=>$request->expfield,
            'formation'=>$request->formation,
            //'age'=>$request->$age,
          
       
        ]);
       
       
        return $associe
       
    ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Associe  $associe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

            $associes = Associe::where("projet_id",$id)->get();
            return $associes;
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Associe  $associe
     * @return \Illuminate\Http\Response
     */
    public function edit(Associe $associe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssocieRequest  $request
     * @param  \App\Models\Associe  $associe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssocieRequest $request,$id)
    {
        $associe = Associe::find($id);
        if($associe)
        {
            $associe->update([
                'projet_id'=>$request->projet_id,
                'nom'=>$request->nom,
                'date_naissance'=>new Carbon($request->date_naissance=='null'?now():$request->date_naissance) ,
                'prenom'=>$request->prenom,
                'expduration_id'=>$request->expduration_id,
                'type'=>$request->type,
                'expfield'=>$request->expfield,
                'formation'=>$request->formation,
            ]);
        }
        else{
           Associe::create([
            'projet_id'=>$request->projet_id,
            'nom'=>$request->nom,
            'date_naissance'=>new Carbon($request->date_naissance=='null'?now():$request->date_naissance) ,
            'prenom'=>$request->prenom,
            'expduration_id'=>$request->expduration_id,
            'type'=>$request->type,
            'expfield'=>$request->expfield,
            'formation'=>$request->formation,
        ]);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Associe  $associe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Associe $associe)
    {
        //
    }
}
