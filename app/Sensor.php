<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{

    protected $fillable = [
        'id', 'channel', 'emulated', 'id_location', 'description', 'value', 'type', 'refreshTime'
    ];

    public static $types = ['ldr', 'motion', 'temperature', 'sound', 'door', 'window'];
}
