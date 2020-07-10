<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporateEngagerUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_engager_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('corporate_engager_id');
            $table->unsignedBigInteger('corporate_engager_role_id');
            $table->string('token');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('corporate_engager_id')->references('id')->on('corporate_engagers');
            $table->foreign('corporate_engager_role_id')->references('id')->on('corporate_engager_roles');
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
        Schema::dropIfExists('corporate_engager_users');
    }
}
