<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puntuacion extends Model
{
    protected $guarded = [];
    protected $table = "puntuacion";

    public function jugadores(){
        return $this->belongsTo(User::class);//Pertenece a un usuario
    }

    public function categorias(){
        return $this->belongsTo(Categoria::class);//Pertenece a una categoria
    }
}
