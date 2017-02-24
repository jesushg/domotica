<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActuatorClimatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actuator_climates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('channel')->unique();
            $table->boolean('emulated');
            $table->string('description');
            $table->boolean('state');
            $table->integer('temperature');
            $table->enum('type',\App\ActuatorClimate::$types);
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
        Schema::drop('actuator_climates');
    }
}
