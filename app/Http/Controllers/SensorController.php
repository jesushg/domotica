<?php

namespace App\Http\Controllers;

use App\Location;
use App\Sensor;
use App\Circuit;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $sensors = Sensor::all();
        return view('sensors.index',compact('sensors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::all();
        if($locations->isEmpty()){
            return redirect()->route('location.create');
        }
        $idNameLocations = [];
        foreach ($locations as $location){
            $idNameLocations[$location->id] = $location->name;
        }
//        dd($idNameLocations);
        $busyChannels = DB::table('actuator_luminosities')->select('channel')->get();
//        $freeChannels = [];
//        foreach ($busyChannels as $busyChannel){
//            $freeChannels[] = $busyChannel->channel;
//        }
        $freeChannels = [];
        for ($i = 1; $i <= 30; $i++){
            $iIsFree = true;
            foreach ($busyChannels as $busyChannel){
                if($i == $busyChannel->channel){
                    $iIsFree = false;
                }
            }
            if ($iIsFree){
                $freeChannels[$i] = $i;
            }
        }
        return view('sensors.create', compact('idNameLocations', 'freeChannels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sensor::create($request->all());
        return redirect()->route('circuit.sensor.index');
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
