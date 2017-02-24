@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register Sensor</div>
                    <div class="panel-body">
                        {{ Form::open(['route' => 'circuit.sensor.store', 'method' => 'post']) }}

                            <div class="form-group">
                                {{ Form::label('channel', 'Canal') }}
                                {{ Form::select('channel', $freeChannels, null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    {{ Form::checkbox('emulated', 1, null, ['class' => 'form-check-input']) }}
                                    Emulado
                                </label>
                            </div>
                            <div class="form-group">
                                {{ Form::label('id_location', 'Localización') }}
                                {{ Form::select('id_location', $idNameLocations, null, ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('description', 'Descripción') }}
                                {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('value', 'Valor inicial') }}
                                {{ Form::number('value', 0, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('type','Tipo') }}
                                {{ Form::select('type', \App\Sensor::$types,
                                                        null,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('refreshTime', 'Tiempo de refresco (en segundos)') }}
                                {{ Form::number('refreshTime', 0, ['class' => 'form-control', 'min' => 0]) }}
                            </div>
                            <button type="submit" class="btn btn-default">Crear Actuador de luminosidad</button>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection