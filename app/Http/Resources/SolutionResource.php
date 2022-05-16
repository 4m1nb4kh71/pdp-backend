<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SolutionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'solution';
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'projet_id'=>$this->projet_id,
            'description_besoin' => $this->description_besoin,
            'faisabilite' => $this->faisabilite,
            'originalite' => $this->originalite,
            'marche' => $this->marche,
           // 'item_id' => $this->item_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
