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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    //Autenticacion
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::get('me', 'App\Http\Controllers\AuthController@me');
    Route::post('register', 'App\Http\Controllers\AuthController@register');
    Route::post('registerAdmin', 'App\Http\Controllers\AuthController@registerAdmin');
});

    //Categorias
    Route::get('categorias', 'App\Http\Controllers\CategoriasController@index');
    Route::post('store', 'App\Http\Controllers\CategoriasController@store');
    Route::get('show', 'App\Http\Controllers\CategoriasController@show');
    Route::put('update', 'App\Http\Controllers\CategoriasController@update');
    Route::delete('destroy', 'App\Http\Controllers\CategoriasController@destroy');

    //Categorias
    Route::get('clientes', 'App\Http\Controllers\ClientesController@index');
    Route::post('store', 'App\Http\Controllers\ClientesController@store');
    Route::get('show', 'App\Http\Controllers\ClientesController@show');
    Route::put('update', 'App\Http\Controllers\ClientesController@update');
    Route::delete('destroy', 'App\Http\Controllers\ClientesController@destroy');

    //Hosts
    Route::get('hosts', 'App\Http\Controllers\HostsController@index');
    Route::post('store', 'App\Http\Controllers\HostsController@store');
    Route::get('show', 'App\Http\Controllers\HostsController@show');
    Route::put('update', 'App\Http\Controllers\HostsController@update');
    Route::delete('destroy', 'App\Http\Controllers\HostsController@destroy');

    //Lugares
    Route::get('lugares', 'App\Http\Controllers\LugaresController@index');
    Route::post('store', 'App\Http\Controllers\LugaresController@store');
    Route::get('show', 'App\Http\Controllers\LugaresController@show');
    Route::put('update', 'App\Http\Controllers\LugaresController@update');
    Route::delete('destroy', 'App\Http\Controllers\LugaresController@destroy');

    //Servicios
    Route::get('servicios', 'App\Http\Controllers\ServiciosController@index');
    Route::post('store', 'App\Http\Controllers\ServiciosController@store');
    Route::get('show', 'App\Http\Controllers\ServiciosController@show');
    Route::put('update', 'App\Http\Controllers\ServiciosController@update');
    Route::delete('destroy', 'App\Http\Controllers\ServiciosController@destroy');

    //Servicios x lugares
    Route::get('servlugares', 'App\Http\Controllers\ServLugaresController@index');
    Route::post('store', 'App\Http\Controllers\ServLugaresController@store');
    Route::get('show', 'App\Http\Controllers\ServLugaresController@show');
    Route::put('update', 'App\Http\Controllers\ServLugaresController@update');
    Route::delete('destroy', 'App\Http\Controllers\ServLugaresController@destroy');