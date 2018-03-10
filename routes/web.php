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
    return view('inicio');
});


Route::post('formulario','formularioController@formulario');

Route::get('/busquedaValor', function () {
    return view('busquedaValor');
});

Route::get('/busquedaNombre', function () {
    return view('busquedaNombre');
});

Route::get('/busquedaCodigo', function () {
    return view('busquedaCodigo');
});

Route::get('/busquedaTipo', function () {
    return view('busquedaTipo');
});

Route::get('/busquedaClase', function () {
    return view('busquedaClase');
});


Route::post('productos','formularioController@productos');

Route::get('/mostrar', function () {
    return view('mostrar');
});

Route::post('compra','CompraController@compra');

Route::get('/compra', function () {
    return view('compra');
});

Route::get('/mostrar', function () {
    return view('mostrar');
});






/*Route::post('formulario','FormularioController@formulario');

Route::get('/formulario', function () {
    return view('formulario');
});*/

