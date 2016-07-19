<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesBulletinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures_bulletins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bulletin_id', false, true)->nullable();
//            $table->foreign('bulletin_id')->references('images_id')->on('bulletins')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pictures_bulletins');
    }
}
