<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TestQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_question', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cluster_id')->unsigned(); 
            $table->integer('part_id')->unsigned(); 
            $table->text('body');
            $table->string('attachment');
            $table->string('attachment_type');
            
            $table->index('cluster_id');
            $table->foreign('cluster_id')->references('id')->on('test_cluster')->onDelete('cascade');
            $table->index('part_id');
            $table->foreign('part_id')->references('id')->on('test_part')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_question');
    }
}
