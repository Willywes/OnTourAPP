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

Route::get('/', function (){
    return view('template.base');
})->name('dashboard');

Route::prefix('roles')->group(function () {
    Route::get('/', 'RolController@index')->name('roles');
});



Route::resource('usuarios', 'UserController');

Route::resource('contratos', 'ContratoController');

Route::resource('destinos', 'DestinoController');

Route::resource('tours', 'TourController');

Route::resource('servicios-adicionales', 'ServicioController');

