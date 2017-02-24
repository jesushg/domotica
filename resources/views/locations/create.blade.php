@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Ubicaciones</div>
            <div class="panel-body">
                {{ Form::open(['route' => 'location.store', 'method' => 'post', 'files' => true]) }}
                    <div class="form-group col-md-4">
                        {{ Form::label('name', 'Nombre') }}
                        {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
                    </div>
                    <div class="form-group col-md-8">
                        {{ Form::label('image', 'Imagen de la ubicación') }}
                        {{ Form::file('image' , ['class' => 'form-control']) }}
                    </div>
                    <button type="submit" class="btn btn-success">Crear Ubicación</button>
                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection