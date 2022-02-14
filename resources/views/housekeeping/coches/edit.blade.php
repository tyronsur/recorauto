@extends('adminlte::page')

@section('title', 'Vehiculos: Editar ')

@section('content_header')
    <h1>Editar Vehiculo: {{$coche->modelo}} [{{$coche->matricula}}]</h1>
@stop

@section('content')
@if (session('info'))
<x-adminlte-alert class="bg-teal text-uppercase" icon="fa fa-lg fa-thumbs-up" title="Genial, {{ Auth::user()->name }}!" dismissable>
    {{session('info')}}
</x-adminlte-alert>
@endif
<div class="row">
<div class="col-md-8">
<div class="card">
    <div class="card-body">
        <form action="{{route('housekeeping.coches.update', $coche)}}" method="POST">
            @csrf
            @method('put')
        <div class="form-group">
            <label for="matricula">Matricula</label>
            <input  class="form-control form-control-border border-width-2" type="text" name="matricula" value="{{old('matricula', $coche->matricula)}}" placeholder="Ejemplo: 0000ABC">
            @error('matricula')
        <br><small>*{{$message}}<br></small>
    @enderror
        </div>
        <div class="form-group">
        <label for="modelo">Modelo</label>
        <input  class="form-control form-control-border border-width-2" type="text" name="modelo" value="{{old('modelo', $coche->modelo)}}" placeholder="Ejemplo: Opel Vivaro">
        @error('modelo')
        <br><small>*{{$message}}<br></small>
    @enderror
        </div>
        <div class="form-group">
            <label for="logo">Logo</label>
            <input  class="form-control form-control-border border-width-2" type="text" name="logo" value="{{old('logo', $coche->logo)}}" placeholder="">
            @error('logo')
        <br><small>*{{$message}}<br></small>
    @enderror
            </div>
         <div class="form-group">
                <label for="combustion">Combustible</label>
                <input  class="form-control form-control-border border-width-2" type="text" name="combustion" value="{{old('combustion', $coche->combustion)}}" placeholder="Diesel/Gasoil">
    @error('combustion')
        <br><small>*{{$message}}<br></small>
    @enderror
                </div>
                <div class="form-group">
                    <label for="anticongelante">Anticongelante</label>
                    <input  class="form-control form-control-border border-width-2" type="text" name="anticongelante" value="{{old('anticongelante', $coche->anticongelante)}}" placeholder="Ejemplo: 50% Rosa">
    @error('anticongelante')
        <br><small>*{{$message}}<br></small>
    @enderror
                </div>
            <div class="form-group">
            <label for="aceite">Aceite</label>
            <input class="form-control form-control-border border-width-2" type="text" name="aceite" value="{{old('aceite', $coche->aceite)}}" placeholder="Ejemplo: 10W40">
    @error('aceite')
        <br><small>*{{$message}}<br></small>
    @enderror
            </div>
            <div class="card-footer"><button type="submit" class="btn btn-warning">Editar Vehiculo</button>
            </form></div>

    </div></div>
</div>

<div class="col-md-4">
    <div class="card">
        <div class="card-body">
            ABC
        </div></div></div></div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop