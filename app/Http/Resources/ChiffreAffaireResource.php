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
            
            'taux_evaluation_activite'=>$this->taux_evaluation_activite,
            'total_general'=>$this->total_general,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
