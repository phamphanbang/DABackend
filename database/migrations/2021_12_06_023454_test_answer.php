<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TestAnswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_answer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('question_id')->unsigned(); 
            $table->string('body');
            $table->boolean('status');
            
            $table->index('question_id');
            $table->foreign('question_id')->references('id')->on('test_question')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_answer');
    }
}
