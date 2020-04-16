<?php

use Illuminate\Support\Facades\Route;
use App\Categoria;
use App\Pregunta;
use App\Respuesta;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/jugar','RespuestasController@juego');
route::post('/jugar','RespuestasController@juego')->name('respuesta.usuario');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faqs', 'PreguntasController@faqs');
Route::post('/home', 'HomeController@index')->name('home');
