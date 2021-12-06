<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HistoryAnswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_answer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('history_id')->unsigned(); 
            $table->integer('question_id')->unsigned(); 
            $table->integer('answer_id')->unsigned(); 
            
            $table->index('history_id');
            $table->foreign('history_id')->references('id')->on('histories')->onDelete('cascade');
            $table->index('question_id');
            $table->foreign('question_id')->references('id')->on('test_question')->onDelete('cascade');
            $table->index('answer_id');
            $table->foreign('answer_id')->references('id')->on('test_answer')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_answer');
    }
}
