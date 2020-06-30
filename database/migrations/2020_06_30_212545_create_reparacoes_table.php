<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReparacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparacoes', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('idCliente')->unsigned();
            $table->bigInteger('idStatus')->unsigned();
            $table->bigInteger('idRepExt')->unsigned();


            $table->integer('contacto');
            $table->string('marca');
            $table->string('modelo');
            $table->integer('imei');
            $table->date('data');
            $table->double('valor');
            $table->timestamps();

            $table->foreign('idCliente')->references('id')->on('clientes');
            $table->foreign('idStatus')->references('id')->on('statuses');
            $table->foreign('idRepExt')->references('id')->on('rep_exts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reparacoes');
    }
}
