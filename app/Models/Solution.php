<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    use HasFactory;
    protected $table='solutions';
    protected $fillable=[
        'projet_id',
        'faisabilite_id',
        'originalite_id',
        'marche_id',
        'description_besoin',
    ];

    public function projet(){
        return $this->belongsTo(Projet::class,'projet_id'); 
    }

    public function solutionitem(){
        return $this->hasMany(SolutionItem::class); 
    }
    
    public function faisabilite(){
        return $this->belongsTo(Faisabilite::class,'faisabilite_id'); 
    }

    public function originalite(){
        return $this->belongsTo(Originalite::class,'originalite_id'); 
    }

    public function marche(){
        return $this->belongsTo(Marche::class,'marche_id'); 
    }
    public function description_besoin(){
        return $this->belongsTo(Description_besoin::class,'description_besoin'); 
    }
    
}
