<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pollutant;
use App\Type;

class PollutantController extends Controller
{
    //
    public function index(){
    	$pollutants = Pollutant::All();
    	$types = Type::All();
    	return view('mapa',['types'=>$types]);
    }
}
