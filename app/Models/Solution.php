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
        
        'description_besoin',
        'faisabilite',
        'originalite',
        'marche',
    ];

    public function projet(){
        return $this->belongsTo(Projet::class,'projet_id'); 
    }

    public function item(){
        return $this->hasMany(Item::class); 
    }
    
}
