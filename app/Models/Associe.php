<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associe extends Model
{
    use HasFactory;
    protected $fillable=[
        'projet_id',
        'nom',
        'prenom',
        'date_naissance',
        'expduration_id',
        'type',
        'expfield',
        'formation',
    ];
    public function projet(){
        return $this->belongsTo(Projet::class,'projet_id'); 
    }
}
