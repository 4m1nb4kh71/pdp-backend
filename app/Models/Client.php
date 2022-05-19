<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table='clients';
    protected $fillable=[
        'viabilite_id',
        'echelle_id',     
        'nom',
    ];
    public function viabilite(){
        return $this->belongsTo(Viabilite::class,'viabilite_id'); 
    }
    public function echelle(){
        return $this->belongsTo(Echelle::class,'echelle_id'); 
    }

    // public function estimation(){
    //     return $this->belongsTo(Estimation::class,'estimation_id'); 
    // } 
}
