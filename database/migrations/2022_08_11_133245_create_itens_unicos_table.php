<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensUnicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_unicos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('raridade');
            $table->integer('peso');
            $table->foreignId('personagem_id')->nullable()->references('id')->on('personagens');
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
        Schema::dropIfExists('item_unicos');
    }
}
