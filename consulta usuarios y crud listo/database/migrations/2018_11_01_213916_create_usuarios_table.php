<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idtipousuario')->unsigned();
            $table->string('usuario', 50);
            $table->string('nombre', 50);
            $table->string('email', 100)->unique();
            $table->string('password', 10);
            $table->boolean('status')->default(1);
            $table->string('foto_perfil', 150)->nullable();
            $table->timestamps();

            $table->foreign('idtipousuario')->references('id')->on('tipo_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
