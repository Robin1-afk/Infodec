<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Estudiantes
Route::get('/api-alumnos', 'App\Http\Controllers\AlumnosController@index');

Route::post('/api-alumnos', 'App\Http\Controllers\AlumnosController@store');

Route::delete('/api-alumnos/{id}', 'App\Http\Controllers\AlumnosController@destroy');


//Clientes
Route::get('/api-clientes', 'App\Http\Controllers\ClienteController@index');

Route::post('/api-clientes', 'App\Http\Controllers\ClienteController@store');

Route::put('/api-clientes/{id}', 'App\Http\Controllers\ClienteController@update');

Route::delete('/api-clientes/{id}', 'App\Http\Controllers\ClienteController@destroy');

