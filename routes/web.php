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
    return view('landingPage');
});

Route::post('/nuevoMensaje', 'nuevoMensajeController@insertarNuevoMensaje');

Route::get('/register', function () {
    return view('register');
});

Route::post('/nuevoRegistro', 'nuevoRegistroController@insertarNuevoRegistro');

Route::post('/nuevoLogin', 'nuevoLoginController@insertarNuevoLogin');

Route::get('/novedades', function () {
    return view('workingPage');
});

Route::get('/layout', function () {
    return view('layouts/master');
});
