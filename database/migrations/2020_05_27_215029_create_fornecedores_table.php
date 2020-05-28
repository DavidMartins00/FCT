<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('morada');
            $table->integer('nif');
            $table->integer('cpost');
            $table->string('cp');
            $table->string('email');
            $table->integer('telemovel');
            $table->string('localidade');

            $table->timestamps();
        });

        DB::table('fornecedores')->insert(
            array(
                'nome' => 'TESTE',
                'morada' => 'RUA TESTE',
                'nif' => '1111111',
                'cpost' => '2222222',
                'cp' => 'CP TESTE',
                'email' => 'TESTE@TESTE.TESTE',
                'telemovel' => '123456789',
                'localidade' => 'Localidade'
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
        Schema::dropIfExists('fornecedores');
    }
}
