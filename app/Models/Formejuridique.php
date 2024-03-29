<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formejuridique extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom'
    ];
    public function porjets(){
        return $this->hasMany(Projet::class,"formejuridique_id");
    }
}
