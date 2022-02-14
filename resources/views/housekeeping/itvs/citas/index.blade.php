@extends('adminlte::page')

@section('title', 'Citas ITV')

@section('content_header')
<a href="{{route('housekeeping.coches.create')}}" class="btn btn-info btn-sm float-right">Añadir Vehiculo</a>
    <h1>Citas de ITV's</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>MATRICULA</th>
                        <th>MODELO</th>
                        <th>FECHA DE CITA</th>
                        <th>HORA DE CITA</th>
                        <th>NOTA</th>
                        <th colspan="2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($citaitvs as $citv)
                        <tr>
                            <td>{{$citv->coche->id}}</td>
                            <td>{{$citv->coche->matricula}}</td>
                            <td>{{$citv->coche->modelo}}</td>
                            <td>{{$citv->fecha}}</td>
                            <td>{{$citv->hora}}</td>
                            <td>{{$citv->nota}}</td>
                            <td with="10px"><a class="btn btn-primary btn-sm" href="">Editar</a></td>
                            <td with="10px"><form action="" method="POST">
                            @csrf
                        @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form></td>
                        </tr>
                        @empty
                        <td colspan="7"><center>NO HAY CITAS DISPONIBLES</center></td>
                    @endforelse
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
