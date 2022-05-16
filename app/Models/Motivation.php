<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motivation extends Model
{
    use HasFactory;
    protected $fillable=[
        'potentiel_id',
        'etat',
    ];

    public function potentiel(){
        return $this->belongsTo(Potentiel::class,'potentiel_id'); 
    }
}
