<?php

use Illuminate\Support\facades\Route;
use Illuminate\Support\facades\DB;
use Illuminate\Http\Request;
use App\Models\Notas;

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

Route::get('notas', 'App\Http\Controllers\NotasController@index') -> name('listar');

Route::get('agregar', 'App\Http\Controllers\NotasController@agregar') -> name('nuevanota');

Route::get('editar', 'App\Http\Controllers\NotasController@editar');

Route::post('crear', 'App\Http\Controllers\NotasController@crear')->name('notas.store');

// Route::get('notas', function(){
//     return 'Aqui estara nuestro listado de notas';
// });

Route::get('notas/actualizar', 'App\Http\Controllers\NotasController@actualizar');

Route::get('contactos', 'App\Http\Controllers\NotasController@contactos');

Route::get('notas/{id}/editar', 'App\Http\Controllers\NotasController@editarnotas')->name('notas.edit');


