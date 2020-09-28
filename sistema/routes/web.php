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
    return view('auth.login');
});
//Route::get('/productos','ProductosController@index');
//Route::get('/productos/create','ProductosController@create');

Route::resource('productos', 'ProductosController')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
