<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mesa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('mesa');
        Schema::create('mesa', function (Blueprint $table) {
            $table->id();
            $table->integer('personas');
            $table->boolean('estado');
            $table->unsignedBigInteger('ID_mesero');
            $table->foreign('ID_mesero')->references('id')->on('mesero');
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
