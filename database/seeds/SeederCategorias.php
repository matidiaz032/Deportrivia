<?php
use App\Categoria; // Tiene que usar al modelo para que seed funcione
use Illuminate\Database\Seeder;

class SeederCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::truncate(); // Evita duplicar datos

        $categorias = new Categoria();
        $categorias->id = "1";
        $categorias->nombre = "Futbol";
        $categorias->descripcion = "El partido de futbol se desarrolla con dos equipos de once jugadores cada uno, pero lo viven apasionadamente miles al mismo tiempo";
        $categorias->save();

        $categorias = new Categoria();
        $categorias->id = "2";
        $categorias->nombre = "Boxeo";
        $categorias->descripcion = "El Boxeo es un deporte de contacto en el cual se enfrentan dos individuos que lucharán únicamente con sus puños, las peleas finalizan por KO o por decisión de los jueces";
        $categorias->save();

        $categorias = new Categoria();
        $categorias->id = "3";
        $categorias->nombre = "Tenis";
        $categorias->descripcion = "El tenis es un deporte que se practica con raquetas y una pequeña pelota. Puede jugarse 1vs1 o 2vs2. El objetivo es impactar la pelota para que pase por encima de la red, intentando que el rival no consiga devolverla.";
        $categorias->save();

        $categorias = new Categoria();
        $categorias->id = "4";
        $categorias->nombre = "Basketball";
        $categorias->descripcion = "El basketball es un deporte en el cual compiten dos equipos de cinco jugadores cada uno. El objetivo es introducir la pelota en el aro del equipo contrario, el que sume mas puntos es el ganador";
        $categorias->save();

        $categorias = new Categoria();
        $categorias->id = "5";
        $categorias->nombre = "Hockey";
        $categorias->descripcion = 'El Hockey es un deporte en la cual dos equipos compiten para llevar una pelota a la portería contraria para anotar goles con la ayuda de un bastón largo llamado "palo de hockey"';
        $categorias->save();

        $categorias = new Categoria();
        $categorias->id = "6";
        $categorias->nombre = "JJ.OO.(Varios)";
        $categorias->descripcion = "Los Juegos Olímpicos son los representantes máximos del deporte, para este evento se reúnen los mejores deportistas del mundo para realizar diferentes disciplinas y asi lograr la mayor cantidad de medallas para su pais";
        $categorias->save();
    }
}
