<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefones', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('telefone_id');
            $table->string('descricao', 50);
            $table->string('codpais', 5);
            $table->smallInteger('ddd');
            $table->integer('prefixo');
            $table->integer('sufixo');
            $table->timestamps();

            $table->integer('pessoa_id');
            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefones');
    }
}
