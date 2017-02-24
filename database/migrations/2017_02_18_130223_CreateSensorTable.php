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
            $table->increments('id');
            $table->integer('channel')->unique();
            $table->boolean('emulated');
            $table->unsignedInteger('id_location');
            $table->string('description');
            $table->enum('type', \App\Sensor::$types);
            $table->integer('value');
            $table->unsignedInteger('refreshTime');

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
        Schema::dropIfExists('sensors');
    }
}
