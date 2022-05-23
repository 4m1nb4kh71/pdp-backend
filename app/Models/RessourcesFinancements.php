<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RessourcesFinancements extends Model
{
    use HasFactory;
    
    protected $table='RessourcesFinancements';
    protected $fillable=[
        'nom',
    ];
    public function client(){
        return $this->hasMany(PlanFinancement::class); 
    }
}