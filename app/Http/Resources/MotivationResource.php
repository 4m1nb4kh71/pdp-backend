<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MotivationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'motivation';
    public function toArray($request)
    {
        return [
            'id' => $this->id,
          //  'potentiel_id' => $this->potentiel_id,
            'etat' => $this->etat,
           
            
        ];
    }
}
