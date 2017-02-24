<?php

namespace App\Http\Controllers;

use App\ActuatorLuminosity;
use App\Http\Requests;
use App\Sensor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sensors = Sensor::where('type', 'ldr')->get();
        $luminosityActuator = ActuatorLuminosity::class;
        return view('home.index',['sensorsLDR'=>$sensors, 'luminosityActuator' => $luminosityActuator]);
    }
}
