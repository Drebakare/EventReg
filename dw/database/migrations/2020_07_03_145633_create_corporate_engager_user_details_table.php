<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporateEngagerUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_engager_user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('lg_id');
            $table->unsignedBigInteger('corporate_engagers_user_id');
            $table->string('token');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('lg_id')->references('id')->on('lgs');
            $table->foreign('corporate_engagers_user_id')->references('id')->on('corporate_engager_users');
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
        Schema::dropIfExists('corporate_engager_user_details');
    }
}
