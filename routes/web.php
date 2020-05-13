<?php


Auth::routes();

Route::get('/', 'HomeController@index');

//Rutas para usuario
Route::resource('usuarios', 'UserController')->middleware('auth');

//Rutas para las notas
Route::resource('/notas/todas', 'NotasController')->middleware('auth');
Route::get('/notas/favoritas', 'NotasController@favoritas')->middleware('auth');
Route::get('/notas/archivadas', 'NotasController@archivadas')->middleware('auth');
