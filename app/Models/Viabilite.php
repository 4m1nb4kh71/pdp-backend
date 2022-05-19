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
        'estimationclient_id',
        'estimationconcurrent_id',
        'estimationfournisseur_id',
        'estimation',
    ];
   

    public function projet(){
        return $this->belongsTo(Projet::class,'projet_id'); 
    }
 

    public function estimationclient(){
        return $this->belongsTo(EstimationClient::class,'estimationclient_id'); 
    }

    public function estimationconcurrent(){
        return $this->belongsTo(EstimationFournisseur::class,'estimationconcurrent_id'); 
    }
    public function estimationfournisseur(){
        return $this->belongsTo(EstimationConcurrent::class,'estimationfournisseur_id'); 
    }

    public function estimation(){
        return $this->belongsTo(Estimation::class,'estimation_id'); 
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

    public function infoprojet(){
        return $this->hasMany(InfoProjet::class); 
    }

    public function planfinancement(){
        return $this->hasMany(PlanFinancement::class); 
    }
    
    public function programmeinvestissement(){
        return $this->hasMany(ProgrammeInvestissement::class); 
    }

    public function chiffreaffaire(){
        return $this->hasMany(chiffreAffaire::class); 
    }
    
}
