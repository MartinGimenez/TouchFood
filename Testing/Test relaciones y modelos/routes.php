<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('postres', function () {
    return view('welcome');
});
Route::get('postres', 'PostreController@view');


Route::get('comidas', function () {
    return view('welcome');
});
Route::get('comidas', 'ComidasController@view');


Route::get('bebidas', function () {
    return view('welcome');
});
Route::get('bebidas', 'BebidasController@view');


Route::get('mesas', function () {
    return view('welcome');
});
Route::get('mesas', 'MesasController@view');


Route::get('oferentes', function () {
    return view('welcome');
});
Route::get('oferentes', 'OferenteController@view');

Route::get('pedidos', function () {
    return view('welcome');
});
Route::get('pedidos', 'PedidosController@view');