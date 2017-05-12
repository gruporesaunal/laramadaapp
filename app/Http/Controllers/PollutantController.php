<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pollutant;
use App\Type;
use App\yearMap;

class PollutantController extends Controller
{
    //
    public function index(Request $request){

    	$input=$request->input();
    	$pollutants = Pollutant::All();
    	$types = Type::All();
    	$yearMaps = yearMap::All();
 
    	return view('mapa',[ 'pollutants'=>$pollutants , 'types'=>$types,'yearMaps'=>$yearMaps]);
    }

}
