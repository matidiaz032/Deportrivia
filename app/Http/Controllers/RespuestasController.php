<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Pregunta;
use App\Respuesta;
use App\Puntuacion;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RespuestasController extends Controller
{

   public function index(Request $request) {
       $categorias = Categoria::all();
       return view('inicio',[
           'categorias' => $categorias
       ]);
   }
    
   public function juego(Request $request, $id) {
    $categorias = Categoria::find($id);
    return view('juego', compact('categorias'));
    }

    public function respuestasUsuario(Request $request){
        $formulario = collect($request->all());
        $categoriaId = $formulario->pull('categorias');
        $puntos = 0;
        foreach ($formulario as $key => $respuestas) {
            if ($key != '_token') {
                if ($respuestas) {
                    $puntos++;
                }
            }
        }
        $jugador = Auth::user();
        $puntuacion = Puntuacion::create([
            'jugadores_id' =>$jugador->id,
            'categoria_id' =>$categoriaId,
            'puntuacion' => $puntos
            ]);
        return view('puntuacion', compact('puntos'));
    } 
}
