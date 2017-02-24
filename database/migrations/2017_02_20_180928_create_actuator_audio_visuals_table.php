<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActuatorAudioVisualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actuator_audio_visuals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('channel')->unique();
            $table->boolean('emulated');
            $table->string('description');
            $table->boolean('recording');
            $table->enum('table', \App\ActuatorAudioVisual::$types);
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
        Schema::drop('actuator_audio_visuals');
    }
}
