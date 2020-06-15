<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepExtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rep_exts', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->string('morada');
            $table->integer('cdpost');
            $table->string('localidade');
            $table->string('contrib');
            $table->integer('contacto');

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
        Schema::dropIfExists('rep_exts');
    }
}
