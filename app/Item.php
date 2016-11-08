<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $timestamps = false;

    public function points(){
        return $this->hasMany('App\Point');
    }
}
