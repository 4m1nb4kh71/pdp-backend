<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChiffreAffaireResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'chiffreaffaire';
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'viabilite_id'=>$this->viabilite_id,
            'type_ca_id'=>$this->type_ca_id,

            'prix_unitaire'=>$this->prix_unitaire,
            'quantite_vendu'=>$this->quantite_vendu,
            'total'=>$this->total,
         
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
