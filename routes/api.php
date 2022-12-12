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

//Registrar usuario host
Route::post('register', 'App\Http\Controllers\AuthController@register');

//Registrar usuario administrador
Route::post('registerAdmin', 'App\Http\Controllers\AuthController@registerAdmin');

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    //Autenticacion
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::get('me', 'App\Http\Controllers\AuthController@me');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'lugares'
], function ($router) {
    //Lugares
    Route::get('/', 'App\Http\Controllers\LugaresController@index');
    Route::post('agregar', 'App\Http\Controllers\LugaresController@store');
    Route::get('especifico/{lugar}', 'App\Http\Controllers\LugaresController@show');
    Route::put('actualizar/{lugar}', 'App\Http\Controllers\LugaresController@update');
    Route::delete('eliminar/{lugar}', 'App\Http\Controllers\LugaresController@destroy');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'categorias'
], function ($router) {
    //Categorias
    Route::get('/', 'App\Http\Controllers\CategoriasController@index');
    Route::post('agregar', 'App\Http\Controllers\CategoriasController@store');
    Route::get('especifico/{categoria}', 'App\Http\Controllers\CategoriasController@show');
    Route::put('actualizar/{categoria}', 'App\Http\Controllers\CategoriasController@update');
    Route::delete('eliminar/{categoria}', 'App\Http\Controllers\CategoriasController@destroy');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'clientes'
], function ($router) {
    //Clientes
    Route::get('/', 'App\Http\Controllers\ClientesController@index');
    Route::post('agregar', 'App\Http\Controllers\ClientesController@store');
    Route::get('especifico/{cliente}', 'App\Http\Controllers\ClientesController@show');
    Route::put('actualizar/{cliente}', 'App\Http\Controllers\ClientesController@update');
    Route::delete('eliminar/{cliente}', 'App\Http\Controllers\ClientesController@destroy');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'hosts'
], function ($router) {
    //Hosts
    Route::get('/', 'App\Http\Controllers\HostsController@index');
    Route::post('agregar', 'App\Http\Controllers\HostsController@store');
    Route::get('especifico/{host}', 'App\Http\Controllers\HostsController@show');
    Route::put('actualizar/{host}', 'App\Http\Controllers\HostsController@update');
    Route::delete('eliminar/{host}', 'App\Http\Controllers\HostsController@destroy');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'servicios'
], function ($router) {
    //Servicios
    Route::get('/', 'App\Http\Controllers\ServiciosController@index');
    Route::post('agregar', 'App\Http\Controllers\ServiciosController@store');
    Route::get('especifico/{servicio}', 'App\Http\Controllers\ServiciosController@show');
    Route::put('actualizar/{servicio}', 'App\Http\Controllers\ServiciosController@update');
    Route::delete('eliminar/{servicio}', 'App\Http\Controllers\ServiciosController@destroy');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'servlugares'
], function ($router) {
    //Servicios x lugares
    Route::get('/', 'App\Http\Controllers\ServLugaresController@index');
    Route::post('agregar', 'App\Http\Controllers\ServLugaresController@store');
    Route::get('especifico/{servlugar}', 'App\Http\Controllers\ServLugaresController@show');
    Route::put('actualizar/{servlugar}', 'App\Http\Controllers\ServLugaresController@update');
    Route::delete('eliminar/{servlugar}', 'App\Http\Controllers\ServLugaresController@destroy');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'rutas',
], function ($router) {
    //Rutas
    Route::get('/', 'App\Http\Controllers\RutasController@index');
    Route::post('agregar', 'App\Http\Controllers\RutasController@store');
    Route::get('especifico/{ruta}', 'App\Http\Controllers\RutasController@show');
    Route::put('actualizar/{ruta}', 'App\Http\Controllers\RutasController@update');
    Route::delete('eliminar/{ruta}', 'App\Http\Controllers\RutasController@destroy');
});