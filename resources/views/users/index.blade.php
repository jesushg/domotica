@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuarios</div>

                    <div class="panel-body">
                        <!--<form class="navbar-form navbar-left pull-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>-->

                        {{--{{ Form::model($request->only(['name', 'rol']), ['route' => 'admin.users.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) }}--}}
                        {{--<div class="form-group">--}}
                            {{--{{ Form::text('name', null, ['class' => 'form-control','placeholder' => 'Nombre de Usuario']) }}--}}
                            {{--{{ Form::select('rol', config('options.rol'), null,['class' => 'form-control']) }}--}}
                        {{--</div>--}}
                        {{--<button type="submit" class="btn btn-default">Buscar</button>--}}
                        {{--{{ Form::close() }}--}}
                        @if(Session::has('message'))
                            <p class="alert alert-success">{{ Session::get('message') }}</p>
                        @endif
                        <a class="btn btn-info" href="{{ url('/register') }}">
                            Crear Usuario
                        </a>
{{--                        @include('admin.users.partials.table')--}}
{{--                        {{ $users->appends($request->only(['name', 'rol']))->render() }}--}}

                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>email</th>
                                <th>Acciones</th>
                                <th>Rol</th>
                            </tr>
                            @foreach($users as $user)
                                <tr data-id="{{ $user->id }}">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->fullName }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->rol }}</td>
                                    <td>
                                        <a href="{{ route('users.edit', $user) }}">Editar</a>
                                        <a href="" class="btn-delete">Borrar</a>

                                        {{ Form::open(['route' => ['users.destroy', $user],
                                        'method' => 'DELETE']) }}
                                        <button type="submit" class="btn btn-danger">Eliminar usuario</button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection