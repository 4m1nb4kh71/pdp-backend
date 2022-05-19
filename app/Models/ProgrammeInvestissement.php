<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammeInvestissement extends Model
{
    use HasFactory;
    protected $table='programme_investissements';
    protected $fillable=[
        'viabilite_id',
        'nom',     
        'prix', 

        
    ];
    public function viabilite(){
        return $this->belongsTo(Viabilite::class,'viabilite_id'); 
    }
   
}
