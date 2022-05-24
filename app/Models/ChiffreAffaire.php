<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiffreAffaire extends Model
{
    use HasFactory;
    protected $table='chiffre_affaires';
    protected $fillable=[
        'viabilite_id',
            
        'taux_evaluation_activite',     
        'total_general',     
        
    ];
    public function viabilite(){
        return $this->belongsTo(Viabilite::class,'viabilite_id'); 
    }

    public function caitem(){
        return $this->hasMany(CaItem::class); 
    }
}
