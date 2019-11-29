<?php

use Illuminate\Database\Seeder;
use App\Industria;

class IndustriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $materia = new Industria();
        $materia->nombre = "1";
        $materia->save();

        $materia = new Industria();
        $materia->nombre = "2";
        $materia->save();

        $materia = new Industria();
        $materia->nombre = "3";
        $materia->save();

        $materia = new Industria();
        $materia->nombre = "4";
        $materia->save();

        $materia = new Industria();
        $materia->nombre = "5";
        $materia->save();

        $materia = new Industria();
        $materia->nombre = "6";
        $materia->save();
    }
}
