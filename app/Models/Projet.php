<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $table = 'projets';
    protected $fillable = [
        'title',
        'description',
        'creation_date',
        'id_forsa',
        'scalenote',
        'coissancenote',
        'emplacementnote',
        'secteur',
        'formejuridique_id',
        'projet_id',




    ];
    public function associes()
    {
        return $this->hasMany(Associe::class);
    }

    public function solutions()
    {
        return $this->hasMany(Solution::class);
    }

    public function potentiels()
    {
        return $this->hasOne(Potentiel::class);
    }

    public function viabilite()
    {
        return $this->hasOne(Viabilite::class);
    }
    public function fomrJuri()
    {
        return $this->belongsTo(Formejuridique::class, "formejuridique_id");
    }
}
