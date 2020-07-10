<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDwHealthRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dw_health_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('doctor_comment')->nullable();
            $table->unsignedBigInteger('dw_id');
            $table->unsignedBigInteger('health_type_id');
            $table->unsignedBigInteger('status_id');
            $table->string('token');
            $table->foreign('dw_id')->references('id')->on('dws');
            $table->foreign('health_type_id')->references('id')->on('health_types');
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
        Schema::dropIfExists('dw_health_records');
    }
}
