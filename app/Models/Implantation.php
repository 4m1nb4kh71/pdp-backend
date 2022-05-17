<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Implantation extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'viabilite_id'
    ];

    
    public function viabilite(){
        return $this->belongsTo(Viabilite::class,'viabilite_id'); 
    }
}
