<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place3 extends Model
{
    public function placeName(){
        return $this->hasOne('App\Place','id','place');
    }

    public function chiefName(){
        return $this->hasOne('App\Place2','id','chief');
    }
}
