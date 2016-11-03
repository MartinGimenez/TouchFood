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


Route::post ('pedido-listado-cancelacionp', [
	'uses' 	=>	'PedidosListadoController@deletep',
	'as'	=>	'pedidoscancelacionp'
]);


Route::post ('pedido-listado-cancelacionb', [
	'uses' 	=>	'PedidosListadoController@deleteb',
	'as'	=>	'pedidoscancelacionb'
]);

Route::post ('pedido-listado-cancelacionc', [
	'uses' 	=>	'PedidosListadoController@deletec',
	'as'	=>	'pedidoscancelacionc'
]);

Route::get('/', function () {
    return view('welcome');
});

Route::get ('pagos', [
	'uses' 	=>	'PagoController@index',
	'as'	=>	'pagos.index'
]);


Route::get ('pagado', [
	'uses' 	=>	'PagoController@actualizarpedido',
	'as'	=>	'pagado.index'
]);



Route::get ('pedido-listado', [
	'uses' 	=>	'PedidosListadoController@index',
	'as'	=>	'pedido.index'
]);

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


//Creando rutas para LOGIN y REGISTER de mesas
Route::get('user/login', [
	'uses'	=>	'Auth\AuthController@getLogin',
	'as'	=>	'user.login'
]);
Route::post('user/login', [
	'uses'	=>	'Auth\AuthController@postLogin',
	'as'	=>	'user.login'
]);
Route::get('user/logout', [
	'uses'	=>	'Auth\AuthController@getLogout',
	'as'	=>	'user.logout'
]);

Route::get('mesas/register', [
	'uses'	=>	'Auth\AuthController@getRegister',
	'as'	=>	'mesas.register'
]);
Route::post('user/register', [
	'uses'	=>	'Auth\AuthController@postRegister',
	'as'	=>	'user.register'
]);

//Creando rutas para LOGIN y REGISTER de ADMIN
Route::get('admin/login', [
	'uses'	=>	'Auth\AdminController@getLogin',
	'as'	=>	'admin.login'
]);
Route::post('admin/login', [
	'uses'	=>	'Auth\AdminController@postLogin',
	'as'	=>	'admin.login'
]);
Route::get('admin/logout', [
	'uses'	=>	'Auth\AdminController@getLogout',
	'as'	=>	'admin.logout'
]);

Route::get('admin/register', [
	'uses'	=>	'Auth\AdminController@getRegister',
	'as'	=>	'admin.register'
]);
Route::post('admin/register', [
	'uses'	=>	'Auth\AdminController@postRegister',
	'as'	=>	'admin.register'
]);

Route::get('/admin/home', ['uses' => 'AdminController@index']);

Route::get('menu/comidas/{categoria}','ComidasController@comidas_por_categoria');
Route::get('menu/bebidas/{categoria}','BebidasController@bebidas_por_categoria');
Route::get('menu/postres/{categoria}','PostresController@postres_por_categoria');

Route::group(['prefix' => 'menu', 'middleware' => 'auth' ], function(){

	Route::get('categorias',[
		'uses' 	=>	'CategoriasController@index',
		'as'	=>	'menu.categorias'
		]);
	Route::resource('comidas','ComidasController');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('bienvenida', [
	'uses' 	=>	'BienvenidaController@index',
	'as'	=>	'bienvenida'
]);
	Route::get('comenzar', function () {
    return view('comenzar');
});
});




Route::post ('admin/comidaslistado', [
	'uses' 	=>	'ComidasController@comidas_por_categoria_admin',
	'as'	=>	'comidas.listado'
]);
Route::group(['prefix' => 'admin' ], function(){

	Route::resource('comidas','ComidasController');
	Route::resource('mesas','MesasController');
	Route::get('mesas/{id}/destroy', [
		'uses'	=>	'MesasController@destroy',
		'as'	=>	'admin.mesas.destroy' 
		]);

	Route::resource('pedidos','PedidosController');

	Route::get('pedidos/{id_pedido}/destroy', [
		'uses'	=>	'PedidosController@destroy',
		'as'	=>	'admin.pedidos.destroy' 
		]);
	Route::get('pedidos/{id_pedido, numero_mesa}/show', [
		'uses'	=>	'PedidosController@show',
		'as'	=>	'admin.pedidos.show' 
		]);


});


