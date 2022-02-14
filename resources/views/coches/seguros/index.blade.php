@extends('layouts.plantilla')

@section('title', 'Gestión Seguros')

@section('content')

<div class="content mb-2">
    <table class="table table-borderless text-center rounded-sm shadow-l" style="overflow: hidden;     background: #fff;">
    <thead>
    <tr>
    <th scope="col" class="bg-white-dark border-dark-dark ">MODELO</th>
    <th scope="col" class="bg-white-dark border-dark-dark ">MATRICULA</th>
    <th scope="col" class="bg-white-dark border-dark-dark ">COMPAÑIA</th>
    <th scope="col" class="bg-white-dark border-dark-dark ">EXPIRA</th>
    <th scope="col" class="bg-white-dark border-dark-dark ">PÓLIZA</th>
    </tr>
    </thead>
    <tbody>
  @foreach ($coches as $coche)
  <tr class="bg-white-light">
    <th scope="row"><img src="{{$coche->logo}}" width="40px" height="40px" style="float:left;"> {{$coche->modelo}}</th>
    <th scope="row">{{$coche->matricula}}</th>
    <th scope="row">{{$coche->seguro->aseguradora}}</th>
    <th scope="row">{{$coche->seguro->expira}}</th>
    <th scope="row">{{$coche->seguro->npoliza}}</th>
    
    </tr>
  @endforeach
   
  
    </tbody>
    </table>
    </div>

@include('layouts.partials.menu-coches')

@endsection