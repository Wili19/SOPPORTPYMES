<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idprioridad')->unsigned();
            $table->integer('idestado')->unsigned();
            $table->integer('idcliente')->unsigned();
            $table->integer('idusuario')->unsigned();
            $table->integer('idusuario_cliente')->unsigned();
            $table->string('folio', 6);
            $table->string('titulo', 50);
            $table->text('descripcion');
            $table->dateTime('fecha_alta');
            $table->dateTime('fecha_actual');
            $table->boolean('condicion')->default(1);
            $table->timestamps();

            $table->foreign('idprioridad')->references('id')->on('prioridades');
            $table->foreign('idestado')->references('id')->on('estados');
            $table->foreign('idcliente')->references('id')->on('clientes');
            $table->foreign('idusuario')->references('id')->on('usuarios');
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
        Schema::dropIfExists('tickets');
    }
}
