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

Route::get('/home', 'HomeController@index')->name('empleado');

/*Route::get('/inicio', function () {
    return view('empleado.home');
});

Route::get('/dashboard', function () {
    return view('gerente.home');
});

*/
/***********CLIENTES****************/

Route::get('cliente/inicio', 'ClienteController@index');
Route::get('cliente/inicio/agregar', 'ClienteController@create');
Route::post('cliente/inicio', 'ClienteController@store');




Route::get('/paquetes', 'PaquetesController@index');
Route::get('cliente/evento/ver', 'ClienteController@visualizar');


/***********EMPLEADO****************/
/*Route::get('empleado/inicio', 'EmpleadoController@index');*/


/***********GERENTE****************/
Route::get('gerente/inicio', 'gerente\GerenteController@index');



/***********GERENTE****************/






