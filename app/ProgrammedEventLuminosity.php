<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgrammedEventLuminosity extends Model
{

    public static $operators = ['=' => '=', '>' => '>', '<' => '<', '≥' => '≥', '≤' => '≤'];

    protected $fillable = [
        'id_user', 'id_actuator', 'id_sensor', 'operator', 'value_sensor', 'percentValue'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user');

    }

    public function actuator(){
        return $this->belongsTo(ActuatorLuminosity::class, 'id_actuator');
    }

    public function sensor(){
        return $this->belongsTo(Sensor::class, 'id_sensor');
    }
}
