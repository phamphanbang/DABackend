<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TestCluster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_cluster', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('part_id')->unsigned();
            $table->integer('order_in_part');
            $table->text('body');
            $table->string('attachment');
            $table->string('attachment_type');
            $table->integer('from_question');
            $table->integer('to_question');
            
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
        Schema::dropIfExists('test_cluster');
    }
}
