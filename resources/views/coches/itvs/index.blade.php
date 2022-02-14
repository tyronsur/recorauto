@extends('layouts.plantilla')

@section('title', 'Gestión ITVs')

@section('content')

<div class="content mb-2">
    <table class="table table-borderless text-center rounded-sm shadow-l" style="overflow: hidden;     background: #fff;">
    <thead>
    <tr>
    <th scope="col" class="bg-white-dark border-dark-dark ">MODELO</th>
    <th scope="col" class="bg-white-dark border-dark-dark ">MATRICULA</th>
    <th scope="col" class="bg-white-dark border-dark-dark ">EXPIRA</th>
    <th scope="col" class="bg-white-dark border-dark-dark ">ACCI&Oacute;N</th>
    </tr>
    </thead>
    <tbody>
  @foreach ($coches as $coche)
  <tr class="bg-white-light">
    <th scope="row"><img src="{{$coche->logo}}" width="40px" height="40px" style="float:left;"> {{$coche->modelo}}</th>
    <th scope="row">{{$coche->matricula}}</th>
    <th scope="row">{{$coche->itv->expira}}</th>
    <th scope="row"><a href="#" data-menu="pedir-cita-{{$coche->id}}" class="btn btn-xxs mb-3 rounded-s text-uppercase font-900 shadow-s border-red-dark  bg-red-light"><span class="badge badge-light">NUEVA CITA</span> </a></th>
    
    </tr>
  @endforeach
   
  
    </tbody>
    </table>
    </div>

</div></div>

@foreach ($coches as $coche)
<div id="pedir-cita-{{$coche->id}}" class="menu menu-box-top menu-box-detached rounded-m">
  <div class="content">
  <div class="d-flex">
  <div>
  <h1 class="opacity-20">CITA ITV</h1>
  </div>
  <div class="ms-auto">
  <h1>{{$coche->matricula}}</h1>
  </div>
  </div>
  <p>COTEJAR PRÓXIMA CITA ITV PARA EL VEHICULO.</p>
  <form action="{{route('citaitvs.store')}}" method="POST">
    @csrf
  <input type="hidden" name="coche_id" value="{{$coche->id}}">
  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
  <div class="has-borders no-icon mb-4">
  <label for="form6" class="color-blue-dark font-600 text-uppercase">Fecha</label>
  <input type="date" value="fecha"  name="fecha" max="2025-01-01" min="2022-01-01" class="form-control validate-text" id="form6" placeholder="Fecha">
  </div>
  <div class="input-style has-borders no-icon mb-4 input-style-active">
  <input type="text" name="hora" class="form-control validate-text" id="form1" placeholder="12:30">
  <label for="form1" class="color-blue-dark font-600 text-uppercase">Hora de la Cita (00:00 Formato 24h)</label>
  </div>
  <div class="input-style has-borders no-icon mb-4">
  <textarea id="form7" name="nota" placeholder="A&ntilde;adir aqui tu anotacion referente a la cita de la ITV."></textarea>
  <label for="form7" class="color-highlight">A&ntilde;adir aqui tus anotaciones referentes a la cita.</label>
  </div>
  <center><button type="submit" class="btn btn-full btn-m rounded-m bg-blue-dark font-700 text-uppercase mb-4 mt-4">Añadir Cita ITV</button>
</form></center>
  </div>
  </div>
  @endforeach

@include('layouts.partials.menu-coches')
    @endsection