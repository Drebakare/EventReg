<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDwHiringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dw_hirings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('duration');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->unsignedBigInteger('dw_id');
            $table->unsignedBigInteger('engager_id');
            $table->unsignedBigInteger('status_id')->default(0);
            $table->unsignedBigInteger('dw_ack_status_id')->default(0);
            $table->string('token');
            $table->foreign('engager_id')->references('id')->on('engagers');
            $table->foreign('dw_id')->references('id')->on('dws');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('dw_ack_status_id')->references('id')->on('statuses');
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
        Schema::dropIfExists('dw_hirings');
    }
}
