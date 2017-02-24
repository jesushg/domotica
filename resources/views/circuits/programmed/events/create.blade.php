@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        {{ Form::open(['route' => 'circuit.programmed.event.luminosity.store', 'method' => 'post']) }}

                            <div class="form-group">
                                {{ Form::label('id_sensor', 'Sensor') }}
                                {{ Form::select('id_sensor', $idsDescriptionsSensors, null, ['class' => 'form-control', 'placeholder' => 'Elige un sensor', 'required']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('operator', 'Comparador') }}
                                {{ Form::select('operator', \App\ProgrammedEventLuminosity::$operators, null, ['class' => 'form-control', 'placeholder' => 'Elige un comparador', 'required']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('value_sensor', 'Valor del Sensor') }}
                                {{ Form::number('value_sensor', 0, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('id_actuator', 'Actuator') }}
                                {{ Form::select('id_actuator', $idsDescriptionsActuators, null, ['class' => 'form-control', 'placeholder' => 'Elige un actuador luminoso', 'required']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('percentValue', 'percentValue') }}
                                {{ Form::number('percentValue', 0, ['class' => 'form-control', 'min' => '0', 'max' => '100']) }}
                            </div>
                            </div>
                            <button type="submit" class="btn btn-default">Crear Programación de Actuador de luminosidad</button>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection