@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

<div class="menu-title"><h1>MARTES</h1><p class="color-highlight">TODAS LAS RUTAS DE HOY</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
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
    </div>

<!-- Layout Required All Views -->
</div></div>
<!-- End Layout Required All Views -->

@include('layouts.partials.menu-coches')

@endsection