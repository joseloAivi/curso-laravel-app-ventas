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
    return view('inicio');
});

Route::get('/contactanos', function () {
    return view('contacto');
});
Route::get('/acercade', function () {
    return view('nosotros');
});

//rutas conectadas a controladores
Route::get('/producto','ProductoController@listar');
//cargar el formulario de producto
Route::get('/producto/crear','ProductoController@nuevo');
//guardar datos
Route::post('/producto','ProductoController@guardar');
//ruta para mostarr un producto
Route::get('/producto/{id}','ProductoController@mostrar');

//ruta para cargar un formulario de edicion
Route::get('/producto/{id}/editar','ProductoController@editar');
//ruta para modificar un recurso
Route::put('/producto/{id}','ProductoController@modificar');
//para eliminar un recurso de producto
Route::delete('/producto/{id}','ProductoController@eliminar');





//Route::get('/categoria','CategoriaController@listar');
//Route::get('/categoria/{id}','CategoriaController@show');


//controlador con recursos
Route::resource("/categoria","CategoriaController");
Route::resource("/cliente","ClienteController");
Route::resource("/pedido","PedidoController");
Route::resource('/usuario','UsuarioController');