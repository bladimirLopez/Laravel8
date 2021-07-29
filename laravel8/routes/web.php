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
    //return view('welcome');
    return "Bienvenido a la pagina principal";
});

Route::get('cursos', function () {
    return "Bienvenido a la página cursos";
});

Route::get('cursos/create', function () {
    return "En esta página podrás crear un curso";
});

//CREANDO RUTA CON UN VARIABLE
Route::get('cursos/{curso}', function ($cursos) {
    return "bienvenido al curso: $cursos";
});
//CREANDO VARIABLE OPCIONAL
Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria=null) {
    if($categoria){
        return "Bienvenido al curso: $curso, de la categoria: $categoria";
    }else{
        return "Bienvenido al curso: $curso";
    }

});