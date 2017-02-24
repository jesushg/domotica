@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class=""> Programaciones de actuadores luminosos</span>
                    </div>
                    <a class="btn btn-info" href="{{ route('location.create') }}">
                        Crear Ubicación
                    </a>
                    <div class="panel-body">
                        @foreach($locations as $location)
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    @if($location->file_extension)
                                        <img src="location/image/{{ $location->id }}.{{ $location->file_extension }}" alt="{{ $location->name }}">
                                    @endif
                                    <div class="caption">
                                        <h4>{{ $location->name }}</h4>
                                        <p>
                                            <a href="#" class="btn btn-primary" role="button">Editar</a>
                                            <a href="#" class="btn btn-default" role="button">Eliminar</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection