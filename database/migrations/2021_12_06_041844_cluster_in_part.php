<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClusterInPart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cluster_in_part', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('part_id')->unsigned();
            $table->integer('cluster_id')->unsigned();
            $table->integer('quantity');

            $table->index('part_id');
            $table->foreign('part_id')->references('id')->on('type_of_parts')->onDelete('cascade');
            $table->index('cluster_id');
            $table->foreign('cluster_id')->references('id')->on('type_of_clusters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cluster_in_part');
    }
}
