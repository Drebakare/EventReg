<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEngagerAddressVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engager_address_verifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address');
            $table->string('image')->nullable();
            $table->string('gps_location')->nullable();
            $table->longText('comment_from_neighbour')->nullable();
            $table->unsignedBigInteger('engager_id');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('lg_id');
            $table->unsignedBigInteger('status_id')->default(0);
            $table->string('token');
            $table->foreign('engager_id')->references('id')->on('engagers');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('lg_id')->references('id')->on('lgs');
            $table->foreign('status_id')->references('id')->on('statuses');
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
        Schema::dropIfExists('engager_address_verifications');
    }
}
