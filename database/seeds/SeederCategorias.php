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

        $categoria = new Categoria();
        $categoria->id = "1";
        $categoria->nombre = "Futbol";
        $categoria->save();
    }
}
