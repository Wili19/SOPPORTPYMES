<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdjuntoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adjunto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idticket')->unsigned();
            $table->string('descripcion', 100);
            $table->timestamps();

            $table->foreign('idticket')->references('id')->on('tickets');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adjunto');
    }
}
