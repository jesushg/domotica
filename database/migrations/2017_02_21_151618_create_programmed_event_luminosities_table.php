<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammedEventLuminositiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programmed_event_luminosities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_sensor');
            $table->enum('operator', \App\ProgrammedEventLuminosity::$operators);
            $table->integer('value_sensor');
            $table->unsignedInteger('id_actuator');
            $table->unsignedInteger('percentValue');
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
        Schema::drop('programmed_event_luminosities');
    }
}
