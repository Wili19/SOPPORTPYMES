<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente')->unsigned();
            $table->string('usuario', 50);
            $table->string('email', 100)->unique();
            $table->string('password', 50);
            $table->string('estado', 30);
            $table->string('foto_perfil', 150);
            $table->dateTime('fecha_alta');
            $table->boolean('condicion')->default(1);
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_clientes');
    }
}
