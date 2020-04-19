<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function preguntas() {
      return $this->hasMany(Pregunta::class);//Puede tener muchas Preguntas.
    }
}
