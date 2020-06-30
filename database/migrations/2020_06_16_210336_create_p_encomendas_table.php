<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePEncomendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_encomendas', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->integer('qtd');
            $table->bigInteger('idNota')->unsigned();
            $table->bigInteger('idProd')->unsigned();

            $table->timestamps();

            $table->foreign('idNota')->references('id')->on('n_encomendas');
            $table->foreign('idProd')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_encomendas');
    }
}
