<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->string('crn',7);
            $table->string('clave',10);
            $table->string('nombre',70);
            $table->unsignedBigInteger('carrera_clave');
            $table->timestamps();

            $table->primary('crn');
            $table->foreign('carrera_clave')->references('clave')->on('carreras');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias');
    }
}
