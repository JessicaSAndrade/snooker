<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ItPartida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('it_partida', function (Blueprint $table) {
            $table->primary('it_partida_id');
            $table->BigInteger('it_partida_id');
            $table->BigInteger('partida_id');
            $table->BigInteger('jogador_id');
            $table->bigInteger('jogador_pai');
            $table->bigInteger('total_ganho');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('it_partida');
    }
}
