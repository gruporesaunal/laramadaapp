<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pollutant extends Model
{
    //
    public $timestamps = false;
    public function Type(){
        return $this->belongsTo('App\Type');
    }
}
