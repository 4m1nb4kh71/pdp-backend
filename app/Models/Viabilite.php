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
        'client_estimation',
        'concurrent_estimation',
        'fournisseur_estimation',
        'estimation_investissement',
        'investissement_estimation',
        'financement_estimation',
        'ca_estimation',
        'nombrepostecrees'
    ];
   

    public function projet(){
        return $this->belongsTo(Projet::class,'projet_id'); 
    }
 

    public function estimationclient(){
        return $this->belongsTo(EstimationClient::class,'client_estimation'); 
    }

    public function estimationconcurrent(){
        return $this->belongsTo(EstimationFournisseur::class,'concurrent_estimation'); 
    }
    public function estimationfournisseur(){
        return $this->belongsTo(EstimationConcurrent::class,'fournisseur_estimation'); 
    }

    public function estimationinvestissement(){
        return $this->belongsTo(Estimation::class,'investissement_estimation'); 
    }
    public function estimationfinancement(){
        return $this->belongsTo(Estimation::class,'financement_estimation'); 
    }
    public function estimationca(){
        return $this->belongsTo(Estimation::class,'ca_estimation'); 
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