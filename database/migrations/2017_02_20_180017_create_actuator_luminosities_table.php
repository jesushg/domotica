<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActuatorLuminositiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actuator_luminosities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('channel')->unique();
            $table->boolean('emulated');
            $table->unsignedInteger('id_location');
            $table->string('description');
            $table->integer('percentValue');
            $table->enum('type',\App\ActuatorLuminosity::$types);
            $table->timestamps();

            $table->foreign('id_location')->references('id')->on('locations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('actuator_luminosities');
    }
}
