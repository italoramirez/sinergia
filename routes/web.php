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
    return view('auth.login');
});

Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('paciente/inicio', 'PacienteController@index')->name('paciente.index')->middleware('auth');

Route::get('paciente', 'PacienteController@create')->name('paciente.create')->middleware('auth');

Route::post('paciente', 'PacienteController@store')->name('paciente.store')->middleware('auth');

Route::get('paciente/{paciente}/edit', 'PacienteController@edit')->name('paciente.edit')->middleware('auth');

Route::put('paciente/{paciente}', 'PacienteController@update')->name('paciente.update')->middleware('auth');

Route::delete('paciente/{paciente}', 'PacienteController@destroy')->name('paciente.destroy')->middleware('auth');
