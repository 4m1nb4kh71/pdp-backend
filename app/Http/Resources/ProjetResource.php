<?php

namespace App\Http\Resources;

use App\Models\Associe;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'projet';
    public function toArray($id)
    {
        return [

            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'id_forsa' => $this->id_forsa,
            'secteur' => $this->secteur,
            'formejuridique_id' => $this->formejuridique_id,
            'porteur' => $this->associes[0]->nom,
            'lien'=>$this->lien,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,


            
        ];
    }
}
