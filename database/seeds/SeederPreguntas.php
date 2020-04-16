<?php
use App\Pregunta; // Tiene que usar al modelo para que seed funcione
use Illuminate\Database\Seeder;

class SeederPreguntas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pregunta::truncate(); // Evita duplicar datos
        
        $preguntas = new Pregunta();
        $preguntas->id = "1";
        $preguntas->detalle = "¿Que camiseta usa Messi en Barcelona?";
        $preguntas->categoria_id = "1";
        $preguntas->save();
        
        $preguntas = new Pregunta();
        $preguntas->id = "2";
        $preguntas->detalle = "¿Quien es el maximo goleador de la historia de Boca Juniors?";
        $preguntas->categoria_id = "1";
        $preguntas->save();
        
    }
    
}
