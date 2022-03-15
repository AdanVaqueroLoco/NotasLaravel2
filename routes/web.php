<?php

use Illuminate\Support\facades\Route;
use Illuminate\Support\facades\DB;
use App\Notas;

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

Route::get('notas', function () {
    $notas = Notas::all();  //DB::table('notas') ->get();

    return view('notas', ['notas' => $notas]);
}) -> name('listar');

Route::get('agregar', function () {
    return view('agregar');
}) -> name('nuevanota');

Route::get('editar', function () {
    return view('editar');
});

// Route::get('notas', function(){
//     return 'Aqui estara nuestro listado de notas';
// });

Route::get('notas/actualizar', function(){
    return 'Aqui actualizaremos notas';
});

Route::get('notas/agregar', function(){
    return 'Aqui es donde agregaremos nuestras notas';
});

Route::get('calendario', function(){
    return 'Calendario donde nos mostraran las notas siguientes';
});

Route::get('calendario/actualizar', function(){
    return 'Aqui podremos editar nuestro calendario, acomodando las notas';
});

Route::get('notas/compartir', function(){
    return 'Aqui podremos compartir nuestras notas con nuestros contactos';
});

Route::get('contactos', function(){
    return 'Aqui se mostraran nuestros contactos';
});

Route::get('notas/{id}/editar', function($id){
    $notas = Notas::find($id);  //DB::table('notas')->where('id', $id)->first();

    return view('editar', ['notas' => $notas]);
    //return 'Aqui se van a editar las notas: '.$id;
})->name('notas.edit');


