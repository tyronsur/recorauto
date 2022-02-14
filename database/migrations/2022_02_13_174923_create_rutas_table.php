<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Ej: Ruta 1
            $table->timestamps();
        });
        Schema::create('rutas_dias', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('rutas_horas', function (Blueprint $table) {
            $table->id();
            $table->string('hora_inicio'); // Ej: Ruta 1
            $table->string('hora_fin');
            $table->timestamps();
        });
        Schema::create('rutas_has_users', function (Blueprint $table) {
            $table->unsignedBigInteger('ruta_id');
            $table->unsignedBigInteger('user_id'); // Ej: Ruta 1
            $table->foreign('ruta_id')->references('id')->on('rutas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('rutas_has_dias', function (Blueprint $table) {
            $table->unsignedBigInteger('ruta_id');
            $table->unsignedBigInteger('dia_id');
            $table->foreign('ruta_id')->references('id')->on('rutas')->onDelete('cascade');
            $table->foreign('dia_id')->references('id')->on('rutas_dias')->onDelete('cascade');
        });
        Schema::create('rutas_has_horas', function (Blueprint $table) {
        $table->unsignedBigInteger('ruta_id');
        $table->unsignedBigInteger('hora_id');
        $table->foreign('ruta_id')->references('id')->on('rutas')->onDelete('cascade');
        $table->foreign('hora_id')->references('id')->on('rutas_horas')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rutas');
        Schema::dropIfExists('rutas_dias');
        Schema::dropIfExists('rutas_horas');
        Schema::dropIfExists('rutas_has_users');
        Schema::dropIfExists('rutas_has_dias');
        Schema::dropIfExists('rutas_has_horas');
    }
}
