<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itvs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coche_id');;
            $table->string('expira')->default('2022/12/31');
            $table->enum('estado', array('Favorable', 'Desfavorable'))->default('Favorable');
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
        Schema::dropIfExists('itvs');
    }
}
