<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PotentielResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'potentiel';
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            //dev pot projet
            'scalabilite_adaptabilite' => $this->scalabilite_adaptabilite,
            'attractivite_territoir_emplacement' => $this-> attractivite_territoir_emplacement,
            'croissance_marche' => $this-> croissance_marche,
            //pot equipe
            'propre_patron' => $this-> propre_patron,
             'Exercer_passion'=> $this-> Exercer_passion,
             'Ameliorer_revenus'=> $this-> Ameliorer_revenus,
             'formaliser_activite'=> $this-> formaliser_activite,
             'independent_financierement'=> $this-> independent_financierement,
             'defis'=> $this-> defis  ,
            
            //determination de l'entrepreneur
            'decisions_judicieuses' => $this-> decisions_judicieuses,
            'realisation_objectifs' => $this-> realisation_objectifs,
            'prendre_risques' => $this-> prendre_risques,
            

             'projet_id'=>$this->projet_id,
             'motivation_id'=>$this->motivation_id,
             'determination_id'=>$this->determination_id,
             'complementaire_id'=>$this->complementaire_id,

             'created_at' => $this->created_at,
             'updated_at' => $this->updated_at,

        ];
    }
}
