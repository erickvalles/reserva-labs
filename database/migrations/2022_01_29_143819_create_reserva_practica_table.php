<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaPracticaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservaxpracticas', function (Blueprint $table) {
            $table->unsignedBigInteger('reserva_id');
            $table->unsignedBigInteger('practicas_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservaxpracticas', function (Blueprint $table) {
            //
        });
    }
}
