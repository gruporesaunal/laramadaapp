<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/login', 'Auth\LoginController@login');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/mapa', 'PollutantController@index');

Route::get('/test', function () {
    return view('test');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/datos', 'TypeController@verInterfazAdministrativa');




