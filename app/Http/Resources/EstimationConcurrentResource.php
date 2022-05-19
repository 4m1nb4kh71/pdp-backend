<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EstimationConcurrentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'estimationconcurrent';
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
           
            
        ];
    }
}
