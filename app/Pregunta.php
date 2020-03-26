<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    public function categoria() {
      return $this->belongsTo(Categoria::class);
    }

    public function respuesta() {
      return $this->hasMany(Respuesta::class);
    }
}
