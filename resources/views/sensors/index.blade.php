@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Sensores</div>

                    <div class="panel-body">

                        <table class="table table-striped">
                            <tr>
                                {{--<th>#</th>--}}
                                <th>Id</th>
                                <th>Canal</th>
                                <th>Emulado</th>
                                <th>Descripción</th>
                                <th>Tipo</th>
                                <th>Valor</th>
                                <th>Tiempo de refresco</th>
                            </tr>
                            @foreach($sensors as $sensor)
                                <tr>
                                    <td>{{ $sensor->id }}</td>
                                    <td>{{ $sensor->channel }}</td>
                                    <td>{{ $sensor->emulated }}</td>
                                    <td>{{ $sensor->description }}</td>
                                    <td>{{ $sensor->type }}</td>
                                    <td>{{ $sensor->value }}</td>
                                    <td>{{ $sensor->refreshTime }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection