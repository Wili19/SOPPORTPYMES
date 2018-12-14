<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idusuario')->unsigned();
            $table->integer('idticket')->unsigned();
            $table->integer('idusuario_cliente')->unsigned();
            $table->dateTime('fecha');
            $table->text('observacion');
            $table->timestamps();

            $table->foreign('idusuario')->references('id')->on('usuarios');
            $table->foreign('idticket')->references('id')->on('tickets');
            $table->foreign('idusuario_cliente')->references('id')->on('usuario_clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguimientos');
    }
}
