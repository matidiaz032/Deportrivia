<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Pregunta;
use App\Respuesta;

class PreguntasController extends Controller
{
    public function faqs()
    {
        return view('faqs');
    }
}
