<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('op_id')->unsigned();
            $table->string('nome');
            $table->date('dataativ');
            $table->integer('nif');
            $table->string('agendado');
            $table->string('instalado');
            $table->string('oknok');
            $table->string('tarifario');
            $table->string('instaladoPNos');
            $table->double('valIva');
            $table->double('valsIva');
            $table->double('valIvaR');
            $table->string('recebido');
            $table->string('contEntregue');
            $table->string('doc');
            $table->timestamps();

            $table->foreign('op_id')->references('id')->on('operadoras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}
