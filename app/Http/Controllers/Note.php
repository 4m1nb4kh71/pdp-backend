<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Note extends Controller
{
    //
    public function store(StoreNoteRequest $request)
    {
          //
          $note = Note::create([
            'value'=>$request->value,
            
            ]);
        return new NoteResource($note) ;
    }
}