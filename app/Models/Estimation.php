<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimation extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable=[
     
        'nom',
    ];

    public function client(){
        return $this->hasMany(client::class); 
    }
}
