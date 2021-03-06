<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_photo', function (Blueprint $table) {
          $table->unsignedBigInteger('album_id')->unsigned();
          $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
          $table->unsignedBigInteger('photo_id')->unsigned();
          $table->foreign('photo_id')->references('id')->on('photos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_photo');
    }
}
