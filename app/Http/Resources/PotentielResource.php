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
            'scalabilité_adaptabilité' => $this->scalabilité_adaptabilité,
            'attractivité_territoir_emplacement' => $this-> attractivité_territoir_emplacement ,
            'croissance_marché' => $this-> croissance_marché ,
            //pot equipe
            'propre_patron' => $this-> propre_patron  ,
             'Exercer_passion'=> $this-> Exercer_passion  ,
             'Améliorer_revenus'=> $this-> Améliorer_revenus  ,
             'formaliser_activité'=> $this-> formaliser_activité  ,
             'independent_financièrement'=> $this-> independent_financièrement  ,
             'défis'=> $this-> défis  ,
            
            //determination de l'entrepreneur
            'décisions_judicieuses' => $this-> décisions_judicieuses  ,
            'réalisation_objectifs' => $this-> réalisation_objectifs  ,
            'prendre_risques' => $this-> prendre_risques  ,
            
             'porteur_projet'=> $this-> porteur_projet  ,

        ];
    }
}
