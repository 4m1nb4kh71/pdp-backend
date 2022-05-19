<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EchelleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'echelle';
    public function toArray($request)
    {
        return [
            'id' => $this->id,
           
            'nom' => $this->nom,
           
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            
        ];
    }
}
