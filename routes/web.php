<?php

use Illuminate\Support\Facades\Route;
use App\Categoria;
use App\Pregunta;
use App\Respuesta;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/jugar', function () {
    $categorias = Categoria::all();
    $preguntas = Pregunta::all();
    $respuestas = Respuesta::all();
    return view('juego', compact('categorias', 'preguntas', 'respuestas')); 
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faqs', 'PreguntasController@faqs');
Route::post('/home', 'HomeController@index')->name('home');
