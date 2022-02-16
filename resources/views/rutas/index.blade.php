@extends('layouts.plantilla')

@section('title', 'MI RUTA')

@section('custom-js-page')
<script type="text/javascript" src="{{ asset('js/countdown.js') }}"></script>
@endsection

@section('content')
<div class="card card-style">
    <div class="content text-center">
    <i class="fa fa-clock fa-7x color-highlight mb-5"></i>
    <h1 class="font-36 font-800 mb-4">Proxima Ruta!</h1>
    <p class="text-center">RUTA 5 [12:30 A 13:30]</p>
    <h3 class="text-center">
        MANCHA REAL
        </h3>
    <div class="countdown row mb-0 mt-5" style="background-color: rgb(238, 238, 238);">
    
    <div class="disabled">
    <h1 class="mb-0 color-theme font-30" id="years"></h1>
    <p class="mt-n1 color-theme font-11 opacity-30">years</p>
    </div>
    <div class="disabled">
    <h1 class="mb-0 color-theme font-30" id="days"></h1>
    <p class="mt-n1 color-theme font-11 opacity-30">days</p>
    </div>
    <div class="col-4">
    <h1 class="mb-0 color-theme font-30" id="hours"></h1>
    <p class="mt-n1 color-theme font-11 opacity-30">Horas</p>
    </div>
    <div class="col-4">
    <h1 class="mb-0 color-theme font-30" id="minutes"></h1>
    <p class="mt-n1 color-theme font-11 opacity-30">Minutos</p>
    </div>
    <div class="col-4">
    <h1 class="mb-0 color-theme font-30" id="seconds"></h1>
    <p class="mt-n1 color-theme font-11 opacity-30">Segundos</p>
    </div>
    </div>
    </div>
    </div>

<!--<div class="menu-title"><h1>MARTES</h1><p class="color-highlight">TODAS LAS RUTAS DE HOY</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
<div class="card card-style">
<div class="content">
<div class="menu-title"><h2>MAÑANA</h2></div>
<div class="divider divider-margins mb-4 mt-3"></div>
<div class="content mt-n4 pb-3">
 

<div data-day="Monday" class="working-hours"><p>RUTA 1</p> <p>09:15</p> <p>11:15</p></div>
<div data-day="Tuesday" class="working-hours bg-red-dark"><p class="color-white">RUTA 5</p> <p class="color-white">10:00</p> <p class="color-white">11:00</p></div>
<div data-day="Wednesday" class="working-hours"><p>RUTA 2</p> <p>11:15</p> <p>13:30</p></div>

</div>
</div></div>
<div class="card card-style">
    <div class="content">
    <div class="menu-title"><h2>TARDE</h2></div>
    <div class="divider divider-margins mb-4 mt-3"></div>
    <div class="content mt-n4 pb-3">

    <div data-day="Thursday" class="working-hours"><p>RUTA 3</p> <p>16:15</p> <p>18:45</p></div>
    
    </div>
    </div>-->

<!-- Layout Required All Views -->
</div></div>
<!-- End Layout Required All Views -->

@include('layouts.partials.menu-coches')

@endsection
