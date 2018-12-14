<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_poliza')->unsigned();
            $table->integer('id_servicio')->unsigned();
            $table->string('empresa', 50);
            $table->string('encargado', 50);
            $table->string('email', 50)->unique();
            $table->string('telefono', 15);
            $table->string('rfc', 30);
            $table->dateTime('fecha_alta');
            $table->boolean('condicion')->default(1);
            $table->timestamps();

            $table->foreign('id_poliza')->references('id')->on('tipo_polizas');
            $table->foreign('id_servicio')->references('id')->on('servicios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
