<?php

namespace App\Http\Controllers;

use App\Models\CaItem;
use App\Http\Requests\StoreCaItemRequest;
use App\Http\Requests\UpdateCaItemRequest;
use App\Http\Resources\CaItemResource;

class CaItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            //
            $caItems = CaItem::all();
            return $caItems;
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
     * @param  \App\Http\Requests\StoreCaItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCaItemRequest $request)
    {
        //
        $caItem = CaItem::create([
            
            'type_ca_id'=>$request->type_ca_id,
            'prix_unitaire'=>$request->prix_unitaire,
            'quantite_vendu'=>$request->quantite_vendu,
            'total'=>$request->total,
            
            
            ]);
        return new CaItemResource($caItem);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CaItem  $caItem
     * @return \Illuminate\Http\Response
     */
    public function show(CaItem $caItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CaItem  $caItem
     * @return \Illuminate\Http\Response
     */
    public function edit(CaItem $caItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCaItemRequest  $request
     * @param  \App\Models\CaItem  $caItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCaItemRequest $request, CaItem $caItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CaItem  $caItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaItem $caItem)
    {
        //
    }
}
