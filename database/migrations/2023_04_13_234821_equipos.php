<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Equipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {

            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->string('nombre');
            $table->string('tipo');
            $table->string('Ficha')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('client_id');
            $table->string('tecnico_id')->nullable();

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
        //
        Schema::dropIfExists('equipos');


    }
}
