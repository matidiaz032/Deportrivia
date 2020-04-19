<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    public function categorias() {
      return $this->belongsTo(Categoria::class);//Pertenece a una Categoria.
    }

    public function respuestas() {
      return $this->hasMany(Respuesta::class);//Tiene muchas Respuestas.
    }
}
