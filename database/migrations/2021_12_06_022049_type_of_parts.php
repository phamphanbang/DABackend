<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TypeOfParts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_of_parts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_of_test')->unsigned();
            $table->string('name')->unique();
            $table->text('description');
            $table->integer('number_of_question');  

            $table->index('type_of_test');
            $table->foreign('type_of_test')->references('id')->on('type_of_tests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_of_parts');
    }
}
