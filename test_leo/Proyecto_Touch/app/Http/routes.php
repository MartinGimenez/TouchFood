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


Route::get('prueba', 'TestController@view');

Route::get('bienvenida', 'BienvenidaController@index');


Route::get('login', [
	'uses'	=>	'LogController@getLogin',
	'as'	=>	'app.auth.login'
]);
Route::post('login', [
	'uses'	=>	'LogController@postLogin',
	'as'	=>	'app.auth.login'
]);
Route::get('logout', [
	'uses'	=>	'LogController@getLogout',
	'as'	=>	'app.auth.logout'
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


