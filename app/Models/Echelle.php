<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Echelle extends Model
{
    use HasFactory;
    
    protected $table='echelles';
    protected $fillable=[
        'nom',
    ];
    public function client(){
        return $this->hasMany(Client::class); 
    }

    public function fournisseur(){
        return $this->hasMany(Fournisseur::class); 
    }
    
}
