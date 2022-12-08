<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('country_name',80);
            $table->text('caption');
            $table->string('image_1',30)->unique();
            $table->string('image_2',30)->unique()->nullable(true);
            $table->string('image_3',30)->unique()->nullable(true);
            $table->string('image_4',30)->unique()->nullable(true);
            $table->string('image_5',30)->unique()->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
