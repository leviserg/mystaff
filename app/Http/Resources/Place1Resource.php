<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Place1Resource extends JsonResource
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
            'place' =>  $this->placeName,
            'chief' =>  $this->chiefName->name,
            'salary'=>  $this->salary,
            'created_at' => $this->created_at.date(""),
            'avatar'    =>  $this->avatar
        ];
    }
}
