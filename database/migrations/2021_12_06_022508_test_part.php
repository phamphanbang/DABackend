<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TestPart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_part', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_in_test');
            $table->integer('test_id')->unsigned(); 
            $table->integer('type_of_part')->unsigned(); 
            
            $table->index('test_id');
            $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade');
            $table->index('type_of_part');
            $table->foreign('type_of_part')->references('id')->on('type_of_parts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_part');
    }
}
