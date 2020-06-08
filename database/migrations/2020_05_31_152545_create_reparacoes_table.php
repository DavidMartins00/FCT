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

            $table->integer('idCliente');
            $table->integer('contacto');
            $table->string('marca');
            $table->string('modelo');
            $table->integer('imei');
            $table->integer('idStatus');
            $table->date('data');
            $table->double('valor');
            $table->integer('idRepExt');

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
        Schema::dropIfExists('reparacoes');
    }
}
