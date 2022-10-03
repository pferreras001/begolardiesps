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
Route::get('/admin', 'App\Http\Controllers\PagesController@admin')->name('admin');

Route::post('/contacto', 'App\Http\Controllers\PagesController@enviar_contacto')->name('contacto');


//parte de gestion de los usuarios
Route::post('/session_start', 'App\Http\Controllers\UserController@session_start')->name('session_start');
Route::post('/send_register', 'App\Http\Controllers\UserController@send_register')->name('send_register');
Route::get('/confirmacion', 'App\Http\Controllers\UserController@confirmar')->name('confirmar');
Route::get('/signup_form/{code}', 'App\Http\Controllers\UserController@signup_form')->name('signup_form');
Route::post('/signup_update', 'App\Http\Controllers\UserController@signup_update')->name('signup_update');
Route::get('/recover_password', 'App\Http\Controllers\UserController@password_recovery')->name('recover_password');
Route::post('/recover_password', 'App\Http\Controllers\UserController@send_recover')->name('send_recover');
Route::get('/recover_form/{id}', 'App\Http\Controllers\UserController@recover_form')->name('recover_form');
Route::post('/update_pass', 'App\Http\Controllers\UserController@update_pass')->name('update_pass');
Route::put('/logout', 'App\Http\Controllers\UserController@logout')->name('logout');