<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->unsignedBigInteger('laboratorio_id');
            $table->string('docente_codigo',15);
            $table->string('materia_crn',7);
            $table->timestamps();

            $table->foreign('laboratorio_id')->references('id')->on('laboratorios');
            $table->foreign('docente_codigo')->references('codigo')->on('docente');
            $table->foreign('materia_crn')->references('crn')->on('materias');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
