<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('animais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_animal',30);
            $table->string('caracteristicas_animal',100);
            $table->integer('id_habitat')->unsigned();
            $table->integer('id_especie')->unsigned();
            $table->foreign('id_habitat')->references('id')->on('habitats')->onDelete('cascade');
            $table->foreign('id_especie')->references('id')->on('especies')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animais');
    }
}
