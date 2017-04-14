<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login(Request $request){
        
        $email = $request->email;
        $password = $request->pwd;
        $remember = false;
        
        // Check if remember property is in the request 
        foreach ($request->all() as $key => $value) {
            if($key == 'remember'){
                $remember = true;
            } 
        }

        if (Auth::attempt(['email' => $email , 'password' => $password], $remember)) {
            // Authentication passed...
            return redirect()->intended('/');
        }else{
            echo "Fallo el logeo";
        }


        //dd($input);
    }


    public function logout(){
        Auth::logout();
        return view('main');
    }

}
