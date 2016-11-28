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

Route::get ('sobre-nosotros-admin', [
	'uses' 	=>	'NosotrosController@admin',
	'as'	=>	'sobre-nosotros-admin'
]);

Route::get ('sobre-nosotros-usuario', [
	'uses' 	=>	'NosotrosController@usuario',
	'as'	=>	'sobre-nosotros-usuario'
]);

Route::get ('pedidos-listado', [
	'uses' 	=>	'PedidosListadoController@show',
	'as'	=>	'pedidoslistado'
]);


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





Route::group(['prefix' => 'admin'], function(){

	Route::resource('comidas','ComidasController');
	Route::get('comidas/{id}/destroy', [
		'uses'	=>	'ComidasController@destroy',
		'as'	=>	'admin.comidas.destroy' 
		]);
	Route::post ('comidaslistado', [
	'uses' 	=>	'ComidasController@comidas_por_categoria_admin',
	'as'	=>	'comidas.listado'
]);
	Route::resource('mesas','MesasController');
	Route::get('mesas/{id}/destroy', [
		'uses'	=>	'MesasController@destroy',
		'as'	=>	'admin.mesas.destroy' 
		]);
	Route::resource('bebidas','BebidasController');
	Route::get('bebidas/{id}/destroy', [
		'uses'	=>	'BebidasController@destroy',
		'as'	=>	'admin.bebidas.destroy' 
		]);
	Route::post ('bebidalistado', [
	'uses' 	=>	'BebidasController@bebidas_por_categoria_admin',
	'as'	=>	'bebidas.listado'
]);
	Route::resource('postres','PostresController');
	Route::get('postres/{id}/destroy', [
		'uses'	=>	'PostresController@destroy',
		'as'	=>	'admin.postres.destroy' 
		]);
	Route::post ('postreslistado', [
	'uses' 	=>	'PostresController@postres_por_categoria_admin',
	'as'	=>	'postres.listado'
]);

	


	Route::get ('pedidos-listado', [
		'uses' 	=>	'PedidosListadoController@show',
		'as'	=>	'pedidoslistado'
	]);

	Route::post ('pedidos-listado-detalle', [
		'uses' 	=>	'PedidosListadoController@listadodetalle',
		'as'	=>	'pedidoslistadodetalle'
	]);

	//Route::resource('pedidos-listado','PedidosListadoController');
	Route::get('pedidos-listado/{id}/destroy', [
		'uses'	=>	'PedidosListadoController@destroy',
		'as'	=>	'admin.pedidoslistado.destroy' 
	]);

	Route::get('reportes/{id}', [
		'uses'	=>	'ReportesController@index',
		'as'	=>	'admin.reportes' 
	]);



});


