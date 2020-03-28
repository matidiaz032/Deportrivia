<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SeederCategorias::class);
         $this->call(SeederPreguntas::class);
         $this->call(SeederRespuestas::class);
    }
}
