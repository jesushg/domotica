<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActuatorLuminosity extends Model
{

    protected $fillable = [
        'id', 'channel', 'emulated', 'id_location', 'description', 'percentValue', 'type'
    ];

    public static $types = ['light', 'blind'];

    public function location(){
        $this->belongsTo(Location::class);
    }
}
