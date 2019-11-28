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
            $table->bigIncrements('id');
            $table->integer('maincategory_id');
            $table->integer('subcategpry_id');
            $table->string('product_condition');
            $table->string('title');
            $table->text('description');
            $table->double('price');
            $table->integer('status')->default('1');
            $table->integer('userid');
            $table->double('totalviews')->nullable();
            $table->double('totallikes')->nullable();
            $table->double('totalfavourites')->nullable();
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
