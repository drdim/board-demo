<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBulletinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulletins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 256);
            $table->text('description')->nullable();
            $table->float('price')->default(0);
            $table->integer('user_id')->unsigned();
            $table->string('image', 512);
            $table->tinyInteger('status');
            $table->integer('images_id', false, true);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->index('user_id');
            $table->index('images_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bulletins', function (Blueprint $table) {
            $table->dropForeign('posts_user_id_foreign');
        });
    }
}
