<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Implantation extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'viabilite_id',
        'modeoccupation_id',
        'adresse',
        'montant_loyer',
    ];
    
    
    public function viabilite(){
        return $this->belongsTo(Viabilite::class,'viabilite_id'); 
    }

    public function modeoccupation(){
        return $this->belongsTo(ModeOccupation::class,'modeoccupation_id'); 
    }
}
