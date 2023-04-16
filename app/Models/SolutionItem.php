<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolutionItem extends Model
{
    use HasFactory;
    protected $table='solution_items';
    protected $fillable=[
        'solution_id',
        'type_solution_id',
        'description',
    ];
    public function solution(){
        return $this->belongsTo(Solution::class,'solution_id'); 
    }
    public function typesolution(){
        return $this->belongsTo(TypeSolution::class,'type_solution_id'); 
    }
}
