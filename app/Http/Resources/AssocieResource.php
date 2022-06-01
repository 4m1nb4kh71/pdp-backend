<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class AssocieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'associe';
    public function toArray($request)
    {
        // $date_naissance = new Carbon($request->date_naissance) ;
        // $age = Carbon::parse($date_naissance)->age ;
        return [
            'id' => $this->id,
            'expduration_id'=>$this->expduration_id,
            'type'=>$this->type,

            'expfield'=>$this->expfield,
            'formation'=>$this->formation,
            // 'age'=>$this-> age ,
         
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
