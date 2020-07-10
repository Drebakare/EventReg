<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnDemandServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('on_demand_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('engager_id');
            $table->unsignedBigInteger('duration_id');
            $table->unsignedBigInteger('frequency_id');
            $table->string('token');
            $table->foreign('engager_id')->references('id')->on('engagers');
            $table->foreign('duration_id')->references('id')->on('durations');
            $table->foreign('frequency_id')->references('id')->on('frequencies');
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
        Schema::dropIfExists('on_demand_services');
    }
}
