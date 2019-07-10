<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_video', function (Blueprint $table) {
          $table->unsignedBigInteger('photo_id')->unsigned();
          $table->foreign('photo_id')->references('id')->on('photos')->onDelete('cascade');
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
        Schema::dropIfExists('photo_video');
    }
}
