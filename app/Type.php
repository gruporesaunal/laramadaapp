<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    public $timestamps = false;

    protected $fillable=['name'];
    
    public function pollutants(){
    	return $this->hasMany('App\Pollutant');
    }

    public function purge(){
    	$this->delete();
    }
}
