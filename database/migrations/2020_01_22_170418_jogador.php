<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jogador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogador', function (Blueprint $table) {
            $table->primary('jogador_id');
            $table->BigInteger('jogador_id');
            $table->string('nome_jogador');
            $table->BigInteger('partida_id');
            $table->BigInteger('it_partida_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jogador');
    }
}
