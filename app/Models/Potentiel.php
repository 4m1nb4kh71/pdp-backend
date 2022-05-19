<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potentiel extends Model
{
    use HasFactory;
    protected $table='potentiels';
    protected $fillable=[

        //dev pot projet
        'scalabilite_adaptabilite',
        'attractivite_territoir_emplacement',
        'croissance_marche',
         //pot equipe
        'propre_patron',
         'Exercer_passion',
         'Ameliorer_revenus',
         'formaliser_activite',
         'independent_financierement',
         'defis',
         //determination de l'entrepreneur
         'decisions_judicieuses',
         'realisation_objectifs',
         'prendre_risques',
         'projet_id',
         'motivation_id',
         'determination_id',
         'complementaire_id',

        
    ];

    public function motivations(){
        return $this->belongsTo(Motivation::class,'motivation_id'); 
    } 
    
    public function determinations(){
        return $this->belongsTo(Determination::class,'determination_id'); 
    }
    
    public function complementaires(){
        return $this->belongsTo(Complementaire::class,'complementaire_id'); 
    }

    public function projet(){
        return $this->belongsTo(Projet::class,'projet_id'); 
    }
}
