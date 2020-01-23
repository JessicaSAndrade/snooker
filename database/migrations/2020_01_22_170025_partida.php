<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Partida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partida', function (Blueprint $table) {
            $table->primary('partida_id');
            $table->BigInteger('partida_id');
            $table->BigInteger('it_partida_id');
            $table->date('data_partida');
            $table->char('tipo_partida', 2);
            $table->foreign('it_partida_id')->references('it_partida_id')->on('it_partida_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partida');
    }
}
