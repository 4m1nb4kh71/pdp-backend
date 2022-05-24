<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaItem extends Model
{
    use HasFactory;
    protected $table='ca_items';
    protected $fillable=[ 
        'chiffre_affaire_id',
        'type_ca_id',
       
        'quantite_vendu',     
        'prix_unitaire',     
        'total',     
        
    ];
    public function chiffreaffaire(){
        return $this->belongsTo(ChiffreAffaire::class,'chiffre_affaire_id'); 
    }
    public function typesolution(){
        return $this->belongsTo(TypeSolution::class,'type_ca_id'); 
    }
}
