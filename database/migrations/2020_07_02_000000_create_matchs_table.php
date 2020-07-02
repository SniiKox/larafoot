<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('possession');
            $table->integer('BP');
            $table->integer('BC');
            $table->integer('nb_changement');
            $table->integer('nb_passe');
            $table->integer('nb_tir');
            $table->integer('nb_tir_cadres');
            $table->integer('cleansheet');
            $table->unsignedBigInteger('equipe_id');
            $table->foreign('equipe_id')
                ->references('id')
                ->on('equipes')
                ->onDelete('restrict')
                ->onUpdate('restrict');

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
        Schema::dropIfExists('matchs');
    }
}
