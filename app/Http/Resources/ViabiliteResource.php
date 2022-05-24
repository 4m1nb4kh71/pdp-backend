<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ViabiliteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'viabilite';
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'projet_id'=>$this->projet_id,
            'estimationconcurrent_id'=>$this->estimationconcurrent_id,
            'client_estimation'=>$this->client_estimation,
            'concurrent_estimation'=>$this->concurrent_estimation,
            'fournisseur_estimation'=>$this->fournisseur_estimation,
            'investissement_estimation'=>$this->investissement_estimation,
            'financement_estimation'=>$this->financement_estimation,
            'ca_estimation'=>$this->ca_estimation,
        
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
