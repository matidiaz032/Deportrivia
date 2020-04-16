<?php

namespace App\Http\Controllers;
use App\Categoria;
use App\Pregunta;
use App\Respuesta;

use Illuminate\Http\Request;

class RespuestasController extends Controller
{
   public function juego() {
    $categorias = Categoria::all();
    $preguntas = Pregunta::all();
    $respuestas = Respuesta::all();
    

    return view('juego', compact('categorias', 'preguntas', 'respuestas'));
    }

    public function respuestasUsuario(Request $request){
         
        foreach ($request as $key => $value) {
            $respuesta = Respuesta::find($key);
            if ($value == ) {
                
            }
        }

        return view('juego', compact('response'));
        }
    }
