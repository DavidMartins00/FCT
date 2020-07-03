<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->double('preco');
            $table->string('desc');
            $table->boolean('vis');
            $table->string('img')->nullable();

            $table->timestamps();
        });

        DB::table('anuncios')->insert(
            array(
                'nome' => 'Iphone X',
                'preco' => '450',
                'desc' => '1gb Ram',
                'vis' => '1',
                'img' => 'https://i.imgur.com/RQZgLBy.jpg'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anuncios');
    }
}
