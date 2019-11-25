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

use Illuminate\Support\Facades\Route;

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


/**********************************************GERENTE*****************************************************/
/*Inicio | Luis Ángel Reyes */
Route::get('gerente/inicio', 'gerente\GerenteController@index');

/*Eventos | Luis Ángel Reyes */


/*Paquetes | Luis Ángel Reyes*/
Route::get('gerente/paquetes', 'gerente\PaquetesController@index');
Route::get('gerente/paquetes/agregar', 'gerente\PaquetesController@create');
Route::post('gerente/paquetes', 'gerente\PaquetesController@store');
Route::get('gerente/paquete/{paquete}/editar', 'gerente\PaquetesController@edit');
Route::patch('gerente/paquete/{paquete}', 'gerente\PaquetesController@update');

/*Usuarios | Luis Ángel Reyes */






/***********GERENTE****************/






