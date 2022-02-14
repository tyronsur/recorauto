<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitaitvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citaitvs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coche_id');
            $table->unsignedBigInteger('user_id');
            $table->date('fecha');
            $table->time('hora');
            $table->text('nota')->nullable();

            $table->foreign('coche_id')->references('id')->on('coches')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('citaitvs');
    }
}
