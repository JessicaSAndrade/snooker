<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddValorApostaTablePartida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partida', function (Blueprint $table) {
            $table->float('valor_aposta', 8, 2) // Nome da coluna
                ->nullable(); // Preenchimento não obrigatório;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partida', function (Blueprint $table) {
            $table->dropColumn('valor_aposta');
        });
    }
}
