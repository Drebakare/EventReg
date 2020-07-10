<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDwIdentityNoVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dw_identity_no_verifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identity_no');
            $table->unsignedBigInteger('dw_id');
            $table->unsignedBigInteger('identity_type_id');
            $table->unsignedBigInteger('status_id');
            $table->string('token');
            $table->foreign('dw_id')->references('id')->on('dws');
            $table->foreign('identity_type_id')->references('id')->on('identity_types');
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
        Schema::dropIfExists('dw_identity_no_verifications');
    }
}
