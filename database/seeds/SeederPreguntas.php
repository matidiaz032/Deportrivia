<?php

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
        DB::table("preguntas")->insert(
            [
                "id" => "1",
                "detalle" => "¿Que camiseta usa Messi en Barcelona?",
                "categoria_id" => "1",
            ]);
    }
}
