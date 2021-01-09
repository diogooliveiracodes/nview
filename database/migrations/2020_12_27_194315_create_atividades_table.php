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
            $table->integer('identifyer');
            $table->text('question');
            $table->text('1');
            $table->text('2');
            $table->text('3');
            $table->text('4');
            $table->text('correct');
            $table->string('created_by');
            $table->string('updated_by')->nullable();
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
