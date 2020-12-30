<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curso_id');
            $table->foreignId('capitulo_id');
            $table->foreignId('aula_id');
            $table->integer('identificador');
            $table->text('pergunta');
            $table->text('1');
            $table->text('2');
            $table->text('3');
            $table->text('4');
            $table->text('correta');
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
        Schema::dropIfExists('atividades');
    }
}
