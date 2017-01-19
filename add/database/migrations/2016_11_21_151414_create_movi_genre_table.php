<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movi_genre', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('movi_id')->unsigned();
            $table->foreign('movi_id')->references('id')->on('movis');

            $table->integer('genre_id')->unsigned();
             $table->foreign('genre_id')->references('id')->on('genres');
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
        Schema::drop('movi_genre');
    }
}
