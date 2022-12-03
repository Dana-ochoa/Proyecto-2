<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatilloOrdenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platillo_orden', function (Blueprint $table) {
            $table->foreignId('orden_id');
            $table->foreignId('platillo_id');
            $table->integer('cantidad');

            $table->foreign('orden_id')->references('id')->on('orden');
            $table->foreign('platillo_id')->references('id')->on('platillo');

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
        Schema::dropIfExists('platillo_orden');
    }
}
