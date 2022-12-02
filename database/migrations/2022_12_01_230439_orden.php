<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orden extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('orden');
        Schema::create('orden', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_creacion');
            $table->timestamp('fecha_cierre');
            $table->float('total');
            $table->unsignedBigInteger('ID_mesero');
            $table->foreign('ID_mesero')->references('id')->on('mesero');
            $table->unsignedBigInteger('ID_mesa');
            $table->foreign('ID_mesa')->references('id')->on('mesa');
            $table->softDeletes();
            
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
    }
}
