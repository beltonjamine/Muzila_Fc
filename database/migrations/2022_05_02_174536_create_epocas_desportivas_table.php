<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epocas_desportivas', function (Blueprint $table) {
            $table->id();
            $table->year('ano_civil');
            $table->string('n_jogos');
            $table->string('n_golos');
            $table->string('vitorias');
            $table->string('derrotas');
            $table->string('empates');
            $table->string('pontos');
            $table->string('saldo_golos');
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
        Schema::dropIfExists('epocas_desportivas');
    }
};
