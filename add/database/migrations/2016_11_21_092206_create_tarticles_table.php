<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarticles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',50);
            $table->string('body',50);


            $table->integer('tuser_id')->unsigned();
            $table->foreign('tuser_id')->references('id')->on('tusers');

            $table->integer('category_id')->unsigned();
             $table->foreign('category_id')->references('id')->on('categories');

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
        Schema::drop('tarticles');
    }
}
