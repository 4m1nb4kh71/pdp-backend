<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Http\Requests\StoreProjetRequest;
use App\Http\Requests\UpdateProjetRequest;
use App\Http\Resources\ProjetResource;
use App\Models\Formejuridique;
use App\Models\Solution;
use App\Models\SolutionItem;
use Carbon\Carbon;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filters()
    {
        $formejuridiques = Formejuridique::all();
        return $formejuridiques;
    }
    public function index()
    {
        //
        $projets = Projet::all();
        return $projets;
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
     * @param  \App\Http\Requests\StoreProjetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjetRequest $request)
    {
        //

        $projet = Projet::create([
            'title' => $request->title,
            'description' => $request->description,
            'creation_date' => new Carbon($request->creation_date),
            'id_forsa' => $request->id_forsa,
            'formejuridique_id' => $request->formejuridique_id,
            'secteur' => $request->secteur,
            'lien' => $request->lien,


        ]);

        return redirect()->to(route("projets"))->with(['message' => 'Successfully deleted!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projet = Projet::findOrFail($id);
        return $projet;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjetRequest  $request
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjetRequest $request, Projet $projet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projet = Projet::find($id);
        $solution = Solution::where("projet_id", $id)->get();

        $projet->solutions()->delete();
        $projet->potentiels()->delete();
        $projet->viabilite()->delete();
       
        $projet->delete();
    }
}
