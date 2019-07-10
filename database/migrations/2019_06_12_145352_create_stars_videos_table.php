<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStarsVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('star_video', function (Blueprint $table) {
            $table->unsignedBigInteger('star_id')->unsigned();
			$table->foreign('star_id')->references('id')->on('stars')->onDelete('cascade');
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
        Schema::dropIfExists('star_video');
    }
}
