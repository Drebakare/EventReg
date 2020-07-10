<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDwTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dw_trainings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dw_id');
            $table->string('duration');
            $table->unsignedBigInteger('training_type_id');
            $table->unsignedBigInteger('status_id')->default(0);
            $table->string('token');
            $table->string('certificate_image')->nullable();
            $table->foreign('dw_id')->references('id')->on('dws');
            $table->foreign('training_type_id')->references('id')->on('training_types');
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
        Schema::dropIfExists('dw_trainings');
    }
}
