<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSegurosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coche_id');
            $table->string('aseguradora');
            $table->string('npoliza');
            $table->string('expira');
            $table->enum('estado', array('Activo', 'Inactivo'))->default('Activo');
            $table->foreign('coche_id')->references('id')->on('coches')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguros');
    }
}
