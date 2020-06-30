<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntervencaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervencaos', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('idRep')->unsigned();

            $table->string('interv');
            $table->timestamps();


            $table->foreign('idRep')->references('id')->on('reparacoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intervencaos');
    }
}
