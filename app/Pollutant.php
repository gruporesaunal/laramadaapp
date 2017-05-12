<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pollutant extends Model
{
    //
    public $timestamps = false;

    public function yearMaps(){
    	return $this->hasMany('App\YearMap');
    }
    public function type(){
        return $this->belongsTo('App\Type');
    }
}
