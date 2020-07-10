<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDwWorkFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dw_work_feedback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('comment');
            $table->integer('rating')->nullable();
            $table->unsignedBigInteger('dw_id');
            $table->unsignedBigInteger('engager_id');
            $table->string('token');
            $table->foreign('engager_id')->references('id')->on('engagers');
            $table->foreign('dw_id')->references('id')->on('dws');
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
        Schema::dropIfExists('dw_work_feedback');
    }
}
