<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            // campo de relacion con usuario
            $table->bigInteger('user_id')->unsigned();
            // Campo titulo
            $table->string('title');
            // Campo de referencia al slugg
            $table->string('slug')->unique();
            // Campo imagen
            $table->string('image')->nullable();
            // Body del post
            $table->text('body');
            // campo para embeber videos
            $table->string('iframe')->nullable();

            $table->timestamps();
            // configuración de la relacion
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
