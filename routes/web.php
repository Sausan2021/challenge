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

Route::get('/', function () {
    return view('Home');
});

//Home Page
Route::view('/Home', 'Home');

//students
Route::view('/Students', 'Students');
Route::view('/ViewDataS','ViewDataS');

//Countries
Route::view('/Countries', 'Countries');
Route::view('/ViewDataC','ViewDataC');

//Classes
Route::view('/Classes', 'Classes');
Route::view('/ViewDataCl','ViewDataCl');

