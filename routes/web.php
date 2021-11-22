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

//Countries
Route::view('/Countries', 'Countries');

//Classes
Route::view('/Classes', 'Classes');

//Statistics
Route::view('/Statistics', 'Statistics');