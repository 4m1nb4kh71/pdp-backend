<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OriginaliteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'originalite';
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'solution_id' => $this->solution_id,
            'description' => $this->description,
           
            
        ];
    }
}
