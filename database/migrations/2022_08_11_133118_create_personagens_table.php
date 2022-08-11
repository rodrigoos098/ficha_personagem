<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personagens', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('xp');
            $table->integer('idade');
            $table->integer('altura');
            $table->integer('peso');
            $table->foreignId('classe_id')->constrained('classes');
            $table->foreignId('raca_id')->constrained('racas');
            $table->foreignId('atributo_id')->constrained('atributos');
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
        Schema::dropIfExists('personagens');
    }
}
