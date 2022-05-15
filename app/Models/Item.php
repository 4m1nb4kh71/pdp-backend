<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable=[
        'solution_id',
        'type',
        'description',
    ];
    public function solution(){
        return $this->belongsTo(Solution::class,'solution_id'); 
    }
}
