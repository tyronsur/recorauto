@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
<a href="{{route('housekeeping.users.create')}}" class="btn btn-info btn-sm float-right">Añadir Usuario</a>
    <h1>Lista de Usuarios</h1>
@stop

@section('content')
<!-- Alerta -->
@if (session('info'))
<x-adminlte-alert class="bg-teal text-uppercase" icon="fa fa-lg fa-thumbs-up" title="Genial, {{ Auth::user()->name }}!" dismissable>
    {{session('info')}}
</x-adminlte-alert>
@endif
<div class="container-fluid">
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>E-Mail</th>
                    <th>Fecha de Creación</th>
                    <th>Ultima Modificación</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td with="10px"><a class="btn btn-primary btn-sm" href="{{route('housekeeping.users.edit', $user)}}">Editar</a></td>
                        <td with="10px"><form action="{{route('housekeeping.users.destroy', $user)}}" method="POST">
                        @csrf
                    @method('DELETE')
                <button class="btn btn-danger btn-sm">Eliminar</button>
            </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
