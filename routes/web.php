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

// HOME
Route::get('/', 'MainController@home') -> name('home');

// SINGOLA PARTITA
Route::get('/match/{id}', 'MainController@match') -> name('match');

// CREA SINGOLA PARTITA
Route::get('create', 'MainController@create') -> name('create');
Route::post('store', 'MainController@store') -> name('store');

// MODIFICA SINGOLA PARTITA
Route::get('edit/match/{id}', 'MainController@edit')-> name('edit');
Route::post('update/match/{id}', 'MainController@update')-> name('update');

// ELIMINA SINGOLA PARTITA
Route::get('/destroy/{id}', 'MainController@destroy') -> name('destroy');