<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegistrosController;
use App\Http\Controllers\QuejasReclamosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/registros', [RegistrosController::class, 'index'])->name('registros.index');

Route::resource('producto', ProductoController::class);

//Route::get('/quejas-reclamos', 'QuejasReclamosController@index')->name('quejas_reclamos.index');

// Ruta para mostrar los datos de la tabla
Route::get('/quejas-reclamos', 'QuejasReclamosController@index');

// Ruta para mostrar el formulario de creación
Route::get('/quejas-reclamos/create', 'QuejasReclamosController@create');

// Ruta para almacenar los datos enviados desde el formulario de creación
Route::post('/quejas-reclamos', 'QuejasReclamosController@store');

// Ruta para mostrar el formulario de edición
Route::get('/quejas-reclamos/{id}/edit', 'QuejasReclamosController@edit');

// Ruta para actualizar los datos enviados desde el formulario de edición
Route::put('/quejas-reclamos/{id}', 'QuejasReclamosController@update');

// Ruta para eliminar un registro
Route::delete('/quejas-reclamos/{id}', 'QuejasReclamosController@destroy');

Route::get('/quejas-reclamos', 'QuejasReclamosController@index')->name('quejas-reclamos.index');



