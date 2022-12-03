<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationMigrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('personas')->unsigned()->default(0); //checar formulario
            $table->date('fecha');
            $table->time('hora');
            $table->string('nombre');
            $table->string('correo');
            $table->string('telefono');
            //$table->string('correo')->nullable(); (que no es un campo obligatorio)
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
