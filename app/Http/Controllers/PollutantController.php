<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pollutant;
use App\Type;
use App\YearMap;

class PollutantController extends Controller
{
    //
    public function mapa(){
 
    	return view('mapa',[ 'types'=>Type::All()]);
    }

    public function addPollutant(Request $request)
    {
    	$input=$request->input();

    	dd($input);

		$type= Type::find($input['typeId']);
    	# code...
    }

}
