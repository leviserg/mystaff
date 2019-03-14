<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Place0Resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name'  =>  $this->name,
            'placeName' =>  $this->placeName,
            'chief' =>  $this->chiefName->name,
            'salary'=>  $this->salary,
            'created' => $this->created_at.date(),
            'avatar'    =>  $this->avatar
        ];
    }
}
