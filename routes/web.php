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

Route::get('/', 'App\Http\Controllers\PagesController@inicio')->name('inicio');
Route::get('/contacto', 'App\Http\Controllers\PagesController@contacto')->name('contacto');

Route::post('/contacto', 'App\Http\Controllers\PagesController@enviar_contacto')->name('contacto');