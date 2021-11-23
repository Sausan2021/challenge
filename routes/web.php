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
//Route::get('/bookList', 'BooKController@list');

//students
Route::get('/Students', [\App\Http\Controllers\StudentsController::class, 'create']);
Route::post('/Students/store', [\App\Http\Controllers\StudentsController::class, 'store']);
Route::get('/Students/ViewData', [\App\Http\Controllers\StudentsController::class, 'show']);
Route::get('/StudentsEdit/{id}',[\App\Http\Controllers\StudentsController::class, 'edit']);
Route::post('/StudentsUpdate/{id}', [\App\Http\Controllers\StudentsController::class, 'update']);
Route::get('/StudentsDelete/{id}', [\App\Http\Controllers\StudentsController::class, 'destroy']);

//Countries
Route::get('/Countries', [\App\Http\Controllers\CountryController::class, 'create']);
Route::post('/countries/store', [\App\Http\Controllers\CountryController::class, 'store']);
Route::get('/countries/ViewData', [\App\Http\Controllers\CountryController::class, 'show']);
Route::get('/countryEdit/{id}',[\App\Http\Controllers\CountryController::class, 'edit']);
Route::post('/countryUpdate/{id}', [\App\Http\Controllers\CountryController::class, 'update']);
Route::get('/countryDelete/{id}', [\App\Http\Controllers\CountryController::class, 'destroy']);

//Classes
Route::get('/Classes', '\App\Http\Controllers\CategoryController@create');
Route::post('/classe/store', '\App\Http\Controllers\CategoryController@store');
Route::get('/classe/ViewData', '\App\Http\Controllers\CategoryController@show');
Route::get('/classEdit/{id}', '\App\Http\Controllers\CategoryController@edit');
Route::post('/classUpdate/{id}', '\App\Http\Controllers\CategoryController@update');
Route::get('/classDelete/{id}', '\App\Http\Controllers\CategoryController@destroy');


//Route::get('/page', [PageController::class, 'index']);