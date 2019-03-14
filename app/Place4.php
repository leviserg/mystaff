<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place4 extends Model
{
    public function placeName(){
        return $this->hasOne('App\Place','id','place');
    }

    public function chiefName(){
        return $this->hasOne('App\Place3','id','chief');
    }

}
