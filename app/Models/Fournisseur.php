<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;
    protected $table='fournisseurs';
    protected $fillable = [
        'nom',
        'viabilite_id',
        'echelle_id'
    ];

    
    public function viabilite(){
        return $this->belongsTo(Viabilite::class,'viabilite_id'); 
    }
    
    public function echelle(){
        return $this->belongsTo(Echelle::class,'echelle_id'); 
    }
}
