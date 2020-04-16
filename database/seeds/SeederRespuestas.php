<?php
use App\Respuesta; // Tiene que usar al modelo para que seed funcione
use Illuminate\Database\Seeder;

class SeederRespuestas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Respuesta::truncate(); // Evita duplicar datos
    
        //Pregunta 1

        $respuestas = new Respuesta();
        $respuestas->id = "1";
        $respuestas->pregunta_id = "1";
        $respuestas->respuesta = "10";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "2";
        $respuestas->pregunta_id = "1";
        $respuestas->respuesta = "30";
        $respuestas->is_correct = "0";
        $respuestas->save();
        
        $respuestas = new Respuesta();
        $respuestas->id = "3";
        $respuestas->pregunta_id = "1";
        $respuestas->respuesta = "19";
        $respuestas->is_correct = "0";
        $respuestas->save(); 
    
        //respuestas 2  

        $respuestas = new Respuesta();
        $respuestas->id = "4";
        $respuestas->pregunta_id = "2";
        $respuestas->respuesta = "Juan Roman Riquelme";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "5";
        $respuestas->pregunta_id = "2";
        $respuestas->respuesta = "Diego Armando Maradona";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "6";
        $respuestas->pregunta_id = "2";
        $respuestas->respuesta = "Martin Palermo";
        $respuestas->is_correct = "1";
        $respuestas->save();
    }
}
