<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo_pelicula')->unique();
            $table->string('nombre');
            $table->string('clasificacion');
            $table->string('duraccion');
            $table->string('sinopsis');
            $table->string('imagen')->nullable();
            $table->string('video_estreno')->nullable();
            $table->string('url_youtube')->nullable();
            $table->bigInteger('id_categoria_peli')->unsigned();
            $table->foreign('id_categoria_peli')->references('id')->on('categorias');
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('peliculas');
    }
}
