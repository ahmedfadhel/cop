<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tag_video', function (Blueprint $table) {
        $table->unsignedBigInteger('tag_id')->unsigned();
        $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        $table->unsignedBigInteger('video_id')->unsigned();
        $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_video');
    }
}
