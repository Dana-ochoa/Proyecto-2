<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrdenContenido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('orden_contenido');
        Schema::create('orden_contenido', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_inicio');
            $table->integer('cantidad');
            $table->unsignedBigInteger('ID_orden');
            $table->unsignedBigInteger('ID_platillo');
            $table->softDeletes();
        });

        //Schema::table('orden_contenido', function($table) {
          //  $table->foreign('ID_orden')->references('id')->on('orden');
          //  $table->foreign('ID_platillo')->references('id')->on('platillo');
        //});
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
