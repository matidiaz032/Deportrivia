<?php

use Illuminate\Support\Facades\Route;
use App\Categoria;
use App\Pregunta;
use App\Respuesta;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/iniciar','RespuestasController@index')->name('iniciar');
Route::get('/jugar/{id}','RespuestasController@juego')->name('jugar');
route::post('/puntuacion','RespuestasController@respuestasUsuario')->name('puntuacion');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faqs', 'PreguntasController@faqs');
Route::post('/home', 'HomeController@index')->name('home');
