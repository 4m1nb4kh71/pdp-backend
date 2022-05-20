<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeSolution extends Model
{
    use HasFactory;

    protected $table='type_solutions';
    protected $fillable=[
        'nom',
    ];
    public function solutionitem(){
        return $this->hasMany(SolutionItem::class); 
    }
}
