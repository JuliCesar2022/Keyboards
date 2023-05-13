<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentrosReparacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros_reparacion', function (Blueprint $table) {
            $table->id();
            $table->String('centro_reparaciones');
            $table->String('busqueda');
            $table->String('pais');
            $table->String('ciudad');
            $table->String('direccion');
            $table->String('telefono');
            $table->String('horario_comercial');

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
        Schema::dropIfExists('centros_reparacion');
    }
}
