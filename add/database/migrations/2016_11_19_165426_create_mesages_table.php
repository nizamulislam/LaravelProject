<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesages', function (Blueprint $table) {
            $table->increments('id');
           $table->string('text_message', 64);
            $table->integer('puser_id')->unsigned();
            $table->foreign('puser_id')->references('id')->on('pusers');

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
        Schema::drop('mesages');
    }
}
