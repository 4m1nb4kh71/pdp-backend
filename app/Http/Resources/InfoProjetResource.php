<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InfoProjetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'marche';
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'viabilite_id'=>$this->viabilite_id,
            'processus_producion_fabrication' => $this->processus_producion_fabrication,
            'programme_investissement' => $this->programme_investissement,
            'ressource_financement' => $this->ressource_financement,
           
            
        ];
    }
}
