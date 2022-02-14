@extends('layouts.plantilla')

@section('title', 'Vehiculos')

@section('content')
@foreach ($coches as $coche)
<div class="card card-style preload-img entered loaded" data-src="{{$coche->logo}}" data-card-height="150" data-ll-status="loaded" style="height: 150px; background-image: url({{$coche->logo}});">
    <div class="card-center ms-3">
    <h3 class="color-white mb-0">{{$coche->modelo}}</h1>
    <p class="color-white mt-n1 mb-0">Matricula: {{$coche->matricula}}<br>Ult. Revision: -
    <br>Revisado Por: -</p>
    </div>
    <div class="card-center me-3">
    <a href="{{route('coches.show', $coche)}}" class="back-button btn btn-m float-end rounded-xl shadow-xl text-uppercase font-800 bg-highlight">ACCEDER</a>
    </div>
    <div class="card-overlay bg-black opacity-80"></div>
</div>
@endforeach

</div></div>

@include('layouts.partials.menu-coches')

@endsection