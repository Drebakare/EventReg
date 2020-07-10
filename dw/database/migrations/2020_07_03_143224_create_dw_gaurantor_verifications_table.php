<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDwGaurantorVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dw_gaurantor_verifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address');
            $table->string('image')->nullable();
            $table->text('gps_location')->nullable();
            $table->longText('comment_from_neighbour')->nullable();
            $table->string('token');
            $table->unsignedBigInteger('dw_id');
            $table->unsignedBigInteger('gaurantor_id');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('lg_id');
            $table->unsignedBigInteger('ack_status_id')->default(0);
            $table->unsignedBigInteger('verification_status_id')->default(0);
            $table->unsignedBigInteger('employment_type_id');
            $table->foreign('dw_id')->references('id')->on('dws');
            $table->foreign('gaurantor_id')->references('id')->on('dw_gaurantors');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('lg_id')->references('id')->on('lgs');
            $table->foreign('ack_status_id')->references('id')->on('statuses');
            $table->foreign('verification_status_id')->references('id')->on('statuses');
            $table->foreign('employment_type_id')->references('id')->on('employment_types');
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
        Schema::dropIfExists('dw_gaurantor_verifications');
    }
}
