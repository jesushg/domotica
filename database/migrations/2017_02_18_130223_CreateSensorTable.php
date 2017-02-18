<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSensorTable extends Migration
{



    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensors', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->enum('type', \App\Sensor::$types);
            $table->integer('value');
            $table->unsignedInteger('refreshTime');
            $table->timestamps();
            $table->primary('id');
            $table->foreign('id')->references('id')->on('circuits')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensors');
    }
}
