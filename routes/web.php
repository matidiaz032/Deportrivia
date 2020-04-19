<?php

use Illuminate\Support\Facades\Route;
use App\Categoria;
use App\Pregunta;
use App\Respuesta;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/iniciar','RespuestasController@index')->name('iniciar');
Route::get('/jugar','RespuestasController@juego')->name('jugar');
route::post('/jugar','RespuestasController@respuestasUsuario')->name('respuesta.usuario');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faqs', 'PreguntasController@faqs');
Route::post('/home', 'HomeController@index')->name('home');
