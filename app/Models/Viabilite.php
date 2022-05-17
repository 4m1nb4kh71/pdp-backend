<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viabilite extends Model
{
    use HasFactory;
    protected $table='viabilites';
    protected $fillable=[
        'projet_id',
        'viabilite_id',
    ];
   
 

    public function projet(){
        return $this->belongsTo(Projet::class,'projet_id'); 
    }

    public function fournisseur(){
        return $this->hasMany(Fournisseur::class); 
    }

    public function client(){
        return $this->hasMany(Client::class); 
    }

    public function concurrent(){
        return $this->hasMany(Concurrent::class); 
    }

    public function implantation(){
        return $this->hasMany(Implantation::class); 
    }

    
}
