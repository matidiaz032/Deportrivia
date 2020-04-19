<?php

namespace App\Http\Controllers;
use App\Categoria;
use App\Pregunta;
use App\Respuesta;

use Illuminate\Http\Request;

class RespuestasController extends Controller
{

   public function index(Request $request) {
       $categorias = Categoria::all();
       return view('inicio',[
           'categorias' => $categorias
       ]);
   }
    
   public function juego() {
    $categorias = Categoria::all();
    $preguntas = Pregunta::all();
    $respuestas = Respuesta::all();
    

    return view('juego', compact('categorias', 'preguntas', 'respuestas'));
    }

    public function respuestasUsuario(Request $request){
    $pregunta1 = $request->input('1');
    $pregunta2 = $request->input('2');
    if ($pregunta1 == 1) {
        echo "respuesta correcta ";
        if ($pregunta2 == 1) {
            echo "respuesta correcta";
        }
        else {
            echo "respuesta incorrecta";
        }
    }
    } 
}
