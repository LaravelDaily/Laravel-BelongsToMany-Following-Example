<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFollowerTable extends Migration
{
    public function up()
    {
        Schema::create('user_follower', function (Blueprint $table) {
            $table->foreignId('follower_id')->references('id')->on('users');
            $table->foreignId('following_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_follower');
    }
}