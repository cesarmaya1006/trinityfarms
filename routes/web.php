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

Route::get('/', 'ingles\PageController@index')->name('index_En');
Route::get('index', 'ingles\PageController@index')->name('index_En');
Route::get('producto/{variedad?}', 'ingles\PageController@producto')->name('producto_En');
Route::get('prodSeleccionado/{id}', 'ingles\PageController@prodSeleccionado')->name('prodSeleccionado');
