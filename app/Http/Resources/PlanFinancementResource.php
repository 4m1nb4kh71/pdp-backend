<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlanFinancementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'plan__financements';
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'viabilite_id'=>$this->viabilite_id,
            'nom'=>$this->nom,
            'prix' => $this->prix,

            
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
