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

/* Route::get('/', function () {
    return view('bienvenido');
})->name('bienvenido'); */

//Todo lo que esta ala vista del usuario concurrente
Route::get('archivo','ArchivosController@getArchivo')->name('archivo');

Route::get('/', 'BienvenidoController@mostrar_bienvenido')->name('bienvenido');



Route::get('/somos', 'WebController@mostrarsomos')->name('somos');
Route::get('/cartelera', 'WebController@mostrarcartelera')->name('cartelera');
Route::get('/taquilla', 'WebController@mostrartaquilla')->name('taquilla');
Route::get('/confiteria', 'WebController@mostrarconfiteria')->name('confiteria');

Route::get('/boletaprimero', 'WebController@boleta')->name('boletaprimero');
Route::get('/boletados', 'WebController@boleta2')->name('boletados');
Route::get('/boletatres', 'WebController@boleta3')->name('boletatres');
Route::get('/boletacuatro', 'WebController@boleta4')->name('boletacuatro');
Route::get('/boletacinco', 'WebController@boleta5')->name('boletacinco');

Auth::routes();

//Toda la parte aadministrativa

Route::get('/admin', 'adminController@index')->name('admin');


Route::get('/categoria', 'CategoriaController@mostrarcategoria')->name('categoria');
Route::post('/admin/guardarcategoria', 'CategoriaController@guardar_categoria')->name('admin.guardarcategoria');
Route::get('/admin/{id}/editar_categoria', 'CategoriaController@editarformulariocategoria')->name('admin.editar_categoria');
Route::post('/admin/{codigo_categoria}/actualizar_categoria', 'CategoriaController@actualizarformulariocategoria')->name('admin.actualizarformulariocategoria');






Route::get('/pelicula', 'PeliculaController@mostrarpelicula')->name('pelicula');
Route::post('/admin/guardarpeli', 'PeliculaController@guardarpeliculas')->name('admin.guardarpeliculas');


Route::get('/detalle_pelicula', 'DetallePeliculaController@mostrarDetallePelicula')->name('detalle_pelicula');
Route::post('/admin/guardardetallepeliculas', 'DetallePeliculaController@guardardetallepeliculas')->name('admin.guardardetallepeliculas');
Route::get('/producto', 'DetallePeliculaController@mostrarproducto')->name('producto');

//Todas las tablas

Route::get('/tablacategoria', 'TablasController@mostrartablacategorias')->name('tablacategoria');
Route::get('/tablapeliculas', 'TablasController@mostrartablapeliculas')->name('tablapeliculas');
Route::get('/tabladetallepelicula', 'TablasController@mostrardetallepelicula')->name('tabladetallepelicula');

Route::get('/home', 'HomeController@index')->name('home');


