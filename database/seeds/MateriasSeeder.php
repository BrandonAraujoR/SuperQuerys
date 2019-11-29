<?php

use Illuminate\Database\Seeder;
use App\Materia;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $materia = new Materia();
        $materia->nombre = "disenio";
        $materia->save();

        $materia = new Materia();
        $materia->nombre = "inteligencia";
        $materia->save();

        $materia = new Materia();
        $materia->nombre = "conocimiento1";
        $materia->save();

        $materia = new Materia();
        $materia->nombre = "conocimiento2";
        $materia->save();
    }
}
