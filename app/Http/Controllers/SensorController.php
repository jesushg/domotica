<?php

namespace App\Http\Controllers;

use App\Sensor;
use App\Circuit;

use Illuminate\Http\Request;

use App\Http\Requests;

class SensorController extends Controller
{
    public function index(){
        $sensors = Sensor::all();
        return view('sensors.index',compact('sensors'));
    }
}
