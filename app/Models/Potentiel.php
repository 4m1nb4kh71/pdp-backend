<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potentiel extends Model
{
    use HasFactory;
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
         'porteur_id',

        
    ];

    public function projet(){
        return $this->belongsTo(Projet::class,'projet_id'); 
    }
}
