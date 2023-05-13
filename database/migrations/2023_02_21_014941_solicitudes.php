<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Solicitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Solicitudes', function (Blueprint $table) {

            $table->id();
            $table->string('tipo_servicio');
            $table->unsignedBigInteger('equipo_id');
            $table->string('problem');
            $table->String('client_id')->nullable();
            $table->String('advisor_id')->nullable();
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
        Schema::dropIfExists('Solicitudes');
    }
}
