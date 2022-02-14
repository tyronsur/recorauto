@extends('adminlte::page')

@section('title', 'Vehiculos')

@section('content_header')
<a href="{{route('housekeeping.coches.create')}}" class="btn btn-info btn-sm float-right">Añadir Vehiculo</a>
    <h1>Lista de Vehiculos</h1>
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
                    <th>MATRICULA</th>
                    <th>MODELO</th>
                    <th>ITV HASTA</th>
                    <th>SEGURO HASTA</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($coches as $coche)
                    <tr>
                        <td>{{$coche->id}}</td>
                        <td>{{$coche->matricula}}</td>
                        <td>{{$coche->modelo}}</td>
                        <td>{{$coche->itv->expira}}</td>
                        <td>{{$coche->seguro->expira}}</td>
                        <td with="10px"><a class="btn btn-primary btn-sm" href="{{route('housekeeping.coches.edit', $coche)}}">Editar</a></td>
                        <td with="10px"><form action="{{route('housekeeping.coches.destroy', $coche)}}" method="POST">
                        @csrf
                    @method('DELETE')
                <button class="btn btn-danger btn-sm">Eliminar</button>
            </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$coches->links()}}
    </div>
</div>
    
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
