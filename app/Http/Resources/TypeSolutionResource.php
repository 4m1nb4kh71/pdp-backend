<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TypeSolutionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
  
        public static $wrap = 'SolutionItem';
    public function toArray($request)
    {
        return [
            'id' => $this->id,
           
            'type' => $this->type,
           
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            
        ];
    }
    }

