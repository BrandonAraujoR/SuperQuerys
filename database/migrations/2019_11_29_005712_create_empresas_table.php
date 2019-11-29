<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('boleta');
            $table->integer('infraestructura');
            $table->integer('bancos');
            $table->integer('insumo1');
            $table->integer('insumo2');
            $table->integer('en_proceso');
            $table->integer('mercancias');
            $table->integer('clientes');
            $table->integer('hipotecas');
            $table->integer('proveedores');
            $table->integer('capital_social');
            $table->string('materia');
            $table->integer('industria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
