<?php

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
        DB::table("respuestas")->insert(
            [
                "id" => "1",
                "pregunta_id" => "1",
                "pregunta" => "10",
                "is_correct" => "1",
            ]);

        DB::table("respuestas")->insert(    
            [ 
                "id" => "2",   
                "pregunta_id" => "1",
                "pregunta" => "30",
                "is_correct" => "0",
            ]); 
        DB::table("respuestas")->insert(
            [
                "id" => "3",
                "pregunta_id" => "1",
                "pregunta" => "19",
                "is_correct" => "0",
            ]);
            
        
    }
}
