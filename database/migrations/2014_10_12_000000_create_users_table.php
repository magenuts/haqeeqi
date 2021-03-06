<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('provider');
     $table->string('provider_id');
            $table->string('password');
            $table->string('verifyToken');
            $table->string('phone')->nullable();
            $table->text('about')->nullable();
            $table->string('userimage')->nullable();
            $table->string('type')->nullable();
            $table->string('is_verified')->dafault('0');
            $table->string('phone_verified')->dafault('0');
             $table->string('provider_user_id');
          $table->string('provider');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
