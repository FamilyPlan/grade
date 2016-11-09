<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps = false;

    public function matches(){
        return $this->hasMany('App\Match');
    }
}
