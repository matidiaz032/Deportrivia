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
        $preguntas->detalle = "¿Qué selección ganó la primera Copa del Mundo (1930)?";
        $preguntas->categoria_id = "1";
        $preguntas->save();
        
        $preguntas = new Pregunta();
        $preguntas->id = "2";
        $preguntas->detalle = "¿Qué selección llegó a tres finales de la Copa del Mundo pero nunca ganó el título?";
        $preguntas->categoria_id = "1";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "3";
        $preguntas->detalle = "Nadie ganó más Balones de Oro que Lionel Messi. ¿Cuántos tiene?";
        $preguntas->categoria_id = "1";
        $preguntas->save(); 
        
        $preguntas = new Pregunta();
        $preguntas->id = "4";
        $preguntas->detalle = "Miroslav Klose es el máximo goleador de la historia de los Mundiales pero... ¿con cuántos tantos?";
        $preguntas->categoria_id = "1";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "5";
        $preguntas->detalle = "¿Quién es el máximo goleador de la historia de la Champions League?";
        $preguntas->categoria_id = "1";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "6";
        $preguntas->detalle = "¿Quién es el arquero con la mayor valla invicta del futbol argentino?";
        $preguntas->categoria_id = "1";
        $preguntas->save();

        //Boxeo

        $preguntas = new Pregunta();
        $preguntas->id = "7";
        $preguntas->detalle = '¿Qué quiere decir "TKO"?';
        $preguntas->categoria_id = "2";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "8";
        $preguntas->detalle = "¿Cuántas caídas en un round resultan en un nocaut técnico?";
        $preguntas->categoria_id = "2";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "9";
        $preguntas->detalle = "En la WBA y WBC, ¿qué clase de peso viene justo antes del peso pesado?";
        $preguntas->categoria_id = "2";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "10";
        $preguntas->detalle = '¿Cuál es el límite superior de peso de la división "peso pesado"?';
        $preguntas->categoria_id = "2";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "11";
        $preguntas->detalle = '¿Cuál de los siguientes boxeadores fue apodado "El niño de oro"?';
        $preguntas->categoria_id = "2";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "12";
        $preguntas->detalle = '¿Cuál de estos boxeadores argentinos se enfrentó a Muhammad Ali?';
        $preguntas->categoria_id = "2";
        $preguntas->save();

        //Tenis

        $preguntas = new Pregunta();
        $preguntas->id = "13";
        $preguntas->detalle = "¿Qué jugador ha ganado la mayor cantidad de Grand Slams en la competición masculina individual?";
        $preguntas->categoria_id = "3";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "14";
        $preguntas->detalle = "¿Cuál de estos torneos no es uno de los Grand Slams?";
        $preguntas->categoria_id = "3";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "15";
        $preguntas->detalle = "¿Como se llama cuando la puntuacion queda en 40-40?";
        $preguntas->categoria_id = "3";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "16";
        $preguntas->detalle = "¿Que pais es el mas ganador de Copas Davis?";
        $preguntas->categoria_id = "3";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "17";
        $preguntas->detalle = "¿Cuantas Copas Davis posee Argentina?";
        $preguntas->categoria_id = "3";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "18";
        $preguntas->detalle = "¿Cuanto tiempo duró aproximadamente, el partido mas largo de tenis?";
        $preguntas->categoria_id = "3";
        $preguntas->save();

        //Basketball
        
        $preguntas = new Pregunta();
        $preguntas->id = "19";
        $preguntas->detalle = "¿Cuántos segundos dura como máximo una posesión en basketball?";
        $preguntas->categoria_id = "4";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "20";
        $preguntas->detalle = "¿A que altura se encuentra un aro de basketball?";
        $preguntas->categoria_id = "4";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "21";
        $preguntas->detalle = "¿En que juego olimpico la seleccion argentina obtuvo la medalla dorada?";
        $preguntas->categoria_id = "4";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "22";
        $preguntas->detalle = "¿Qué equipo tiene más títulos de la NBA?";
        $preguntas->categoria_id = "4";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "23";
        $preguntas->detalle = "¿Quien es el jugador con mas premios MVP en la NBA?";
        $preguntas->categoria_id = "4";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "24";
        $preguntas->detalle = "¿Cual era la posicion natural de Michael Jordan?";
        $preguntas->categoria_id = "4";
        $preguntas->save();

        //Hockey

        $preguntas = new Pregunta();
        $preguntas->id = "25";
        $preguntas->detalle = "¿Que puede optar un jugador cuando se le cobra una falta?";
        $preguntas->categoria_id = "5";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "26";
        $preguntas->detalle = "¿A que deporte es similar el hockey?";
        $preguntas->categoria_id = "5";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "27";
        $preguntas->detalle = "¿Desde donde es valido el gol?";
        $preguntas->categoria_id = "5";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "28";
        $preguntas->detalle = "¿En cuantos tiempos se desarrolla el juego?";
        $preguntas->categoria_id = "5";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "29";
        $preguntas->detalle = "¿Cuantos jugadores hay por equipo?";
        $preguntas->categoria_id = "5";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "30";
        $preguntas->detalle = "¿Como se debe llevar la bocha?";
        $preguntas->categoria_id = "5";
        $preguntas->save();

        //JJ.OO.

        $preguntas = new Pregunta();
        $preguntas->id = "31";
        $preguntas->detalle = "Las tres modalidades de la esgrima son: sable, espada y _____";
        $preguntas->categoria_id = "6";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "32";
        $preguntas->detalle = "¿Cual de estos deportistas ha ganado mas medallas?";
        $preguntas->categoria_id = "6";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "33";
        $preguntas->detalle = "En natación, ¿cuánto mide de largo una piscina de competición para olimpiadas y mundiales?";
        $preguntas->categoria_id = "6";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "34";
        $preguntas->detalle = "¿Cómo se llama en rugby la lucha frente a frente de dos grupos de jugadores?";
        $preguntas->categoria_id = "6";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "35";
        $preguntas->detalle = "¿Cuantos carriles tiene la pista de atletismo?";
        $preguntas->categoria_id = "6";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "36";
        $preguntas->detalle = "En Voley, ¿que posicion ocupa el jugador con ropa de otro color?";
        $preguntas->categoria_id = "6";
        $preguntas->save();
    }
}
