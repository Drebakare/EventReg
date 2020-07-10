<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ref_no');
            $table->integer('count');
            $table->double('amount');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('verification_type_id');
            $table->string('token');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('verification_type_id')->references('id')->on('verification_types');
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
        Schema::dropIfExists('payments');
    }
}
