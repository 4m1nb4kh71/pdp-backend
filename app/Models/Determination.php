<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Determination extends Model
{
    use HasFactory;
    protected $fillable=[
       
        'nom',
    ];

    public function potentiel(){
        return $this->hasMany(Potentiel::class); 
    }
}
