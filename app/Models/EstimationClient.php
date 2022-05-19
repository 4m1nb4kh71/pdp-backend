<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstimationClient extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];

    
    public function viabilite(){
        return $this->hasMany(viabilite::class); 
    }
}
