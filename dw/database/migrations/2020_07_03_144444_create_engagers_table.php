<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEngagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engagers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('engager_type_id');
            $table->unsignedBigInteger('user_id');
            $table->string('token');
            $table->foreign('engager_type_id')->references('id')->on('engager_types');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('engagers');
    }
}
