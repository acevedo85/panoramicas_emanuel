<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contratos/create/{contrato}', 'ContratosController@create_test');

Route::get('/pedidos/create/{pedido}', 'PedidosController@creating');

Route::get('/anillos/create/{anillo}', 'AnillosController@creating');

Route::get('/pagos/create/{pago}', 'PagosController@creating');

Route::get('/pagos/today', 'PagosController@today');

Route::get('/paquetes/create/{paquete}', 'PaquetesController@creating');

Route::get('/clientes/create/{cliente}', 'ClientesController@creating');

Route::resource('clientes', 'ClientesController');

Route::resource('contratos', 'ContratosController');

Route::resource('pedidos', 'PedidosController');

Route::resource('anillos', 'AnillosController');

Route::resource('pagos', 'PagosController');

Route::resource('gastos', 'GastosController');

Route::resource('grupos', 'GruposController');

Route::resource('paquetes', 'PaquetesController');

Route::resource('productos', 'ProductosController');

Route::resource('eventos', 'EventosController');