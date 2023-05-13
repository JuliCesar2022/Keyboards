<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mantenimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio', function (Blueprint $table){

            $table->id();
            $table->string('tipo_servicio')->nullable();
            $table->date('fecha_servicio')->nullable();
            $table->string('client_id')->nullable();
            $table->string('equipo_id')->nullable();
            $table->string('status')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('tecnico_id')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio');
    }
}
