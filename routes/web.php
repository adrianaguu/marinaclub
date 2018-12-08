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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil','ProfileController@index')->name('profile');
Route::post('/perfil/editar','ProfileController@edit')->name('profileEdit');
Route::get('/reservar/servicio','ReservaController@index')->name('reserva');
Route::get('/reservar/equipamiento','ReservaEqpController@index')->name('reservaeqp');
Route::get('/areas','AreasController@index')->name('areas');
Route::get('/descuentos','DescuentosController@index')->name('descuentos');
Route::post('/reservar/equipamiento/save','ReservaEqpController@save')->name('reservaeqpsave');
Route::post('/reservar/servicio/save','ReservaController@save')->name('reservasave');
Route::get('/ListaReservas','ListaReservasController@index')->name('listareservas');
