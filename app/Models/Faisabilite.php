<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faisabilite extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
    ];

    
    public function solution(){
        return $this->hasMany(Solution::class); 
    }
}
