<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanFinancement extends Model
{
    use HasFactory;
    protected $table='plan_financements';
    protected $fillable=[
        'viabilite_id',
        'nom',    
        'prix', 
       
    ];
    public function viabilite(){
        return $this->belongsTo(Viabilite::class,'viabilite_id'); 
    }
   
}
