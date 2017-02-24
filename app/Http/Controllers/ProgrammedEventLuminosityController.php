<?php

namespace App\Http\Controllers;

use App\ActuatorLuminosity;
use App\ProgrammedEventLuminosity;
use App\Sensor;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ProgrammedEventLuminosityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmedsEventLuminosity = ProgrammedEventLuminosity::all();
//        dd($programmedsEventLuminosity);
        return view('circuits.programmed.events.index',compact('programmedsEventLuminosity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sensors = Sensor::all();
//        dd($sensors);
        if($sensors->isEmpty()){
            return redirect()->route('circuit.sensor.create');
        }
        $idsDescriptionsSensors = [];
        foreach ($sensors as $sensor){
            $idsDescriptionsSensors[$sensor->id] = $sensor->description;
        }

        $actuators = ActuatorLuminosity::all();
        if($actuators->isEmpty()){
            return redirect()->route('circuit.actuatorluminosity.create');
        }
        $idsDescriptionsActuators = [];
        foreach ($actuators as $actuator) {
            $idsDescriptionsActuators[$actuator->id] = $actuator->description;
        }
//        dd($idsDescriptionsActuators);
        return view('circuits.programmed.events.create',['idsDescriptionsSensors'=>$idsDescriptionsSensors, 'idsDescriptionsActuators' => $idsDescriptionsActuators]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programmedEventLuminosity = new ProgrammedEventLuminosity($request->all());
        $programmedEventLuminosity->id_user = Auth::id();
        $programmedEventLuminosity->save();
        return redirect()->route('circuit.programmed.event.luminosity.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
