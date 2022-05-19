<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeOccupation extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
    ];
    public function implantation(){
        return $this->hasMany(Implantation::class); 
    }
}
