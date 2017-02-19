<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{

    public static $types = ['ldr', 'motion', 'temperature', 'sound', 'door', 'window'];


    public function circuit(){
        return $this->hasOne(Circuit::class,'id','id');
    }

    public function variables(){
//        $padre = Circuit::find($this->id);
        $padre = $this->hasOne(Circuit::class,'id')->getResults();
        $this->channel = $padre->channel;
        $this->description = $padre->description;
        $this->emulated = $padre->emulated;
    }
}
