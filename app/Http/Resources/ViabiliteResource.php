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
            'estimationfournisseur_id'=>$this->estimationfournisseur_id,
            'estimationconcurrent_id'=>$this->estimationconcurrent_id,
            'estimationclient_id'=>$this->estimationclient_id,
            'estimation_id'=>$this->estimation_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
