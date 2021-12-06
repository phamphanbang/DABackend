<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->text('body');
            $table->integer('created_by')->unsigned(); 
            $table->integer('level')->unsigned(); 
            $table->integer('time_length');
            $table->integer('number_of_question');
            $table->integer('views');
            $table->timestamps();
            
            $table->index('created_by');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->index('level');
            $table->foreign('level')->references('id')->on('test_levels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
