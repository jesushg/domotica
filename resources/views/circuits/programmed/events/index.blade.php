@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Programaciones de actuadores luminosos</div>

                    <div class="panel-body">
                        <a class="btn btn-info" href="{{ route('circuit.programmed.event.luminosity.create') }}">
                            Crear Programación de actuador luminoso por evento
                        </a>

                        <table class="table table-striped">
                            <tr>
                                {{--<th>#</th>--}}
                                <th>Id</th>
                                <th>Nombre Completo Usuario</th>
                                <th>Sensor</th>
                                <th>Comparación</th>
                                <th>Valor</th>
                                <th>Actuador</th>
                                <th>Valor %</th>
                                <th></th>
                            </tr>
                            @foreach($programmedsEventLuminosity as $programmedEventLuminosity)
                                <tr>
                                    <td>{{ $programmedEventLuminosity->id }}</td>
                                    <td>{{ $programmedEventLuminosity->user->firstName . $programmedEventLuminosity->user->lastName }}</td>
                                    <td>{{ $programmedEventLuminosity->sensor->description }}</td>
                                    <td>{{ $programmedEventLuminosity->operator }}</td>
                                    <td>{{ $programmedEventLuminosity->sensor->value }}</td>
                                    <td>{{ $programmedEventLuminosity->actuator->description }}</td>
                                    <td>{{ $programmedEventLuminosity->actuator->percentValue }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection