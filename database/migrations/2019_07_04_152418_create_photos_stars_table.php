<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosStarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('photo_star', function (Blueprint $table) {
        $table->unsignedBigInteger('photo_id')->unsigned();
        $table->foreign('photo_id')->references('id')->on('photos')->onDelete('cascade');
        $table->unsignedBigInteger('star_id')->unsigned();
        $table->foreign('star_id')->references('id')->on('stars')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photo_star');
    }
}
