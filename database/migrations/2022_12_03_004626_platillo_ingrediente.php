<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlatilloIngrediente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('platillo_ingrediente');
        Schema::create('platillo_ingrediente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_platillo');
            $table->foreign('id_platillo')->references('id')->on('platillo');
            $table->unsignedBigInteger('ingrediente_id');
            $table->foreign('id_ingrediente')->references('id')->on('ingrediente');
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
