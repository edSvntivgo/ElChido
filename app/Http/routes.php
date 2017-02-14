<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/* ruta para el inicio*/
Route::get('/', 'WelcomeController@index');
/*ruta para la creacion de usuarios*/
Route::resource('usuario','UsuarioController');
/*Ruta para el CRUD de Peliculas*/
Route::resource('movie','MovieController');
/*Ruta para le CRUD de Generos*/
Route::resource('genero','GenerosController');
/*Ruta del logeo*/
Route::resource('log','LogController');
Route::get('logout','LogController@logout');
Route::get('admin','FrontController@admin');
/*Rutas de la info*/
Route::get('quien','InfoController@quienes');
Route::get('obten','InfoController@obtener');
Route::get('social','InfoController@sociales');
Route::get('/','InfoController@login');
/*Ruta para Los Comentarios*/
Route::resource('comentario','ComentController');