<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Type;

class TypeController extends Controller
{
	public function verInterfazAdministrativa()
	{
		if(!Auth::check())
	    	return redirect()->back();
	    

		$types= Type::All();

		return view('datos',['types'=>$types]);

	}
    //
}
