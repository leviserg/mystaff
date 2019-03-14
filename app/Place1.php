<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place1 extends Model
{
    public function placeName(){
        return $this->hasOne('App\Place','id','place');
    }

    public function chiefName(){
        return $this->hasOne('App\Place0','id','chief');
    }
}
