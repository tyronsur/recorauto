@extends('adminlte::page')

@section('title', 'Gestión de ITVs')

@section('content_header')
<a href="{{route('housekeeping.coches.create')}}" class="btn btn-info btn-sm float-right">Añadir Próxima Cita</a>
    <h1>Lista de Información ITV's</h1>
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
                        <th>ITV HASTA</th>
                        <th>ESTADO</th>
                        <th colspan="2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coches as $coche)
                        <tr>
                            <td>{{$coche->id}}</td>
                            <td>{{$coche->matricula}}</td>
                            <td>{{$coche->modelo}}</td>
                            <td>{{$coche->itv->expira}}</td>
                            <td>{{$coche->itv->estado}}</td>
                            <td with="10px"><a class="btn btn-primary btn-sm" href="">Editar</a></td>
                            <td with="10px"><form action="" method="POST">
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