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
        'nom',
       
        'quantite_vendu',     
        'prix_unitaire',     
        'total',         
        
    ];
    public function viabilite(){
        return $this->belongsTo(Viabilite::class,'viabilite_id'); 
    }
  
}
