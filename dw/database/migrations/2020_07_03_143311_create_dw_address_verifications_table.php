<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDwAddressVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dw_address_verifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address');
            $table->string('image')->nullable();
            $table->string('gps_location')->nullable();
            $table->longText('comment_from_neighbour')->nullable();
            $table->unsignedBigInteger('dw_id');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('lg_id');
            $table->unsignedBigInteger('status_id')->default(0);
            $table->string('token');
            $table->foreign('dw_id')->references('id')->on('dws');
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
        Schema::dropIfExists('dw_address_verifications');
    }
}
