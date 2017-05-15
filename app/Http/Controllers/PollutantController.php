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

		$type= Type::find($input['typeId']);

    	$checker= Pollutant::where('name',$input['name'])->where('type_id',$input['typeId'])->first();

    	if(!is_null($checker))
    		return redirect()->back()->withErrors(['El Contaminante ya existe, editelo o eliminelo']);

    	$pollutant= new Pollutant;
    	$pollutant->name=$input['name'];
    	$pollutant->description=$input['descripcion'];
    	$pollutant->type_id=$type->id;

    	$iframes=$input['iframe'];
    	$years=$input['year'];

    	$pollutant->save();

    	for ($i=0; $i < $input['mapas']; $i++) { 
    		$yearMap = new YearMap;
    		$yearMap->year=$years[$i];
    		$yearMap->iframe=$iframes[$i];
    		$yearMap->pollutant_id=$pollutant->id;
    		$yearMap->save();
    	}

    	return redirect()->back();

    	# code...
    }

    public function deletePollutant(Request $request)
    {
    	$input=$request->input();

		$pollutant= Pollutant::find($input['pollutantId']);

		$pollutant->purge();
		
		return redirect()->back();
    }


}
