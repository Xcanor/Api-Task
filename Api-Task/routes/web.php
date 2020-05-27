<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Flights\HomeController@search')->name('searchflight');
Route::post('/', 'Flights\HomeController@index');


/*Route::get('home',function(){
    return view('flights.index');
});*/