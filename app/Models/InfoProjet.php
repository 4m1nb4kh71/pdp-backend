<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoProjet extends Model
{
    use HasFactory;
    protected $fillable = [
        'viabilite_id',
        'processus_producion_fabrication',
        'programme_investissement',
        'ressource_financement'
    ];
    public function viabilite(){
        return $this->belongsTo(Viabilite::class,'viabilite_id'); 
    }


}
