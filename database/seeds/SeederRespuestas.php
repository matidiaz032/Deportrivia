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

        $categoria = new Respuesta();
        $categoria->id = "1";
        $categoria->pregunta_id = "1";
        $categoria->respuesta = "10";
        $categoria->is_correct = "1";
        $categoria->save();

        $categoria = new Respuesta();
        $categoria->id = "2";
        $categoria->pregunta_id = "1";
        $categoria->respuesta = "30";
        $categoria->is_correct = "0";
        $categoria->save();
            
        $categoria = new Respuesta();
        $categoria->id = "3";
        $categoria->pregunta_id = "1";
        $categoria->respuesta = "19";
        $categoria->is_correct = "0";
        $categoria->save();          
    }
}
