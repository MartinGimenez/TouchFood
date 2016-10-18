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
Route::get('comenzar', function () {
    return view('comenzar');
});


Route::get ('pedido', [
	'uses' 	=>	'PedidosController@agregar_pedido',
	'as'	=>	'pedido.agregar'
]);

Route::post ('pedidoscomidas', [
	'uses' 	=>	'PedidosComidasController@store',
	'as'	=>	'pedidoscomidas'
]);

Route::post ('pedidosbebidas', [
	'uses' 	=>	'PedidosBebidasController@store',
	'as'	=>	'pedidosbebidas'
]);

Route::post ('pedidospostres', [
	'uses' 	=>	'PedidosPostresController@store',
	'as'	=>	'pedidospostres'
]);

Route::get ('pruebascroll/p', 'ComidasController@index');

Route::get('bienvenida', [
	'uses' 	=>	'BienvenidaController@index',
	'as'	=>	'bienvenida'
]);

Route::get('auth/login', [
	'uses'	=>	'Auth\AuthController@getLogin',
	'as'	=>	'auth.login'
]);
Route::post('auth/login', [
	'uses'	=>	'Auth\AuthController@postLogin',
	'as'	=>	'auth.login'
]);
Route::get('auth/logout', [
	'uses'	=>	'Auth\AuthController@getLogout',
	'as'	=>	'auth.logout'
]);

Route::get('auth/register', [
	'uses'	=>	'Auth\AuthController@getRegister',
	'as'	=>	'auth.register'
]);
Route::post('auth/register', [
	'uses'	=>	'Auth\AuthController@postRegister',
	'as'	=>	'auth.register'
]);
Route::get('menu/comidas/{categoria}','ComidasController@comidas_por_categoria');
Route::get('menu/bebidas/{categoria}','BebidasController@bebidas_por_categoria');
Route::get('menu/postres/{categoria}','PostresController@postres_por_categoria');

Route::group(['prefix' => 'menu' ], function(){

	Route::get('categorias',[
		'uses' 	=>	'CategoriasController@index',
		'as'	=>	'menu.categorias'
		]);
	Route::resource('comidas','ComidasController');
});



Route::group(['prefix' => 'admin' ], function(){

	
	Route::resource('mesas','MesasController');
});


