@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">Actuadores</div>
                <div class="panel-body">
                    @include('home.partials.actuators')
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Programaciones</div>
                <div class="panel-body">
                    @include('home.partials.programming')
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading"><a href="{{ route('circuit.sensor.index') }}">Sensores</a></div>
                <div class="panel-body">
                    @include('home.partials.sensors')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
