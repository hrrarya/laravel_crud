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

Route::get('/', 'studentController@index')->name('index');
Route::get('/create', 'studentController@create')->name('create');

Route::post('/store', 'studentController@store')->name('store');