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
        $categorias->save();
    }
}
