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

Route::get('/', 'EmpleadosController@index')->name('empleados.index');
Route::get('/crear', 'EmpleadosController@create')->name('empleados.agregar');
Route::get('/{empleado}/editar', 'EmpleadosController@edit')->name('empleados.editar');
Route::post('/{empleado}/editar', 'EmpleadosController@update')->name('empleados.actualizar');
Route::delete('/{empleado}', 'EmpleadosController@destroy')->name('empleados.eliminar');
Route::post('/', 'EmpleadosController@store')->name('empleados.guardar');


Route::get('/domicilios/{empleado}', 'DomiciliosController@index')->name('domicilios.index');
Route::get('/domicilios/{empleado}/agregar', 'DomiciliosController@create')->name('domicilios.agregar');
Route::post('/domicilios/{empleado}', 'DomiciliosController@store')->name('domicilios.guardar');
Route::get('/domicilios/{domicilio}/editar', 'DomiciliosController@edit')->name('domicilios.editar');
Route::delete('/domicilios/{domicilio}', 'DomiciliosController@destroy')->name('domicilios.eliminar');