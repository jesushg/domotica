@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Sensores</div>

                    <div class="panel-body">
                        <a class="btn btn-info" href="{{ route('circuit.actuatorluminosity.create') }}">
                            Crear Actuador luminoso
                        </a>

                        <table class="table table-striped">
                            <tr>
                                {{--<th>#</th>--}}
                                <th>Id</th>
                                <th>Canal</th>
                                <th>Emulado</th>
                                <th>Descripción</th>
                                <th>Tipo</th>
                                <th>Valor %</th>
                                <th></th>
                            </tr>
                            @foreach($actuators as $actuator)
                                <tr>
                                    <td>{{ $actuator->id }}</td>
                                    <td>{{ $actuator->channel}}</td>
                                    <td>{{ $actuator->emulated }}</td>
                                    <td>{{ $actuator->description }}</td>
                                    <td>{{ $actuator->type }}</td>
                                    <td>{{ $actuator->percentValue }}</td>
                                    <td>{{ $actuator->refreshTime }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection