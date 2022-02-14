@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')



<div class="row text-center mb-0">
<a href="#" data-menu="coming-soon" class="col-6 pe-0">
<div class="card card-style me-2 mb-2">
<i class="fa fa-road color-green-dark fa-3x mt-5"></i>
<h1 class="pt-4">MI RUTA</h1>
<p class="font-11 opacity-50 mt-n1">CONSULTA DONDE VAS HOY</p>
</div>
</a>
<a href="#" data-menu="coming-soon" class="col-6 ps-0">
<div class="card card-style ms-2 mb-3">
<i class="fa fa-map-signs color-yellow-dark fa-3x mt-5"></i>
<h1 class="pt-4">MAPAS</h1>
<p class="font-11 opacity-50 mt-n1">¡NO TE PIERDAS!</p>
</div>
</a>
<a href="#" data-menu="menu-coches" class="col-6 pe-0">
<div class="card card-style me-2 mb-2">
<i class="fa fa-car color-blue-dark fa-3x mt-5"></i>
<h1 class="pt-4">VEHICULOS</h1>
<p class="font-11 opacity-50 mt-n1">DOCUMENTACIÓN & MÁS</p>

</div>
</a>
<a href="#" data-menu="coming-soon" class="col-6 ps-0">
<div class="card card-style ms-2 mb-3">
<i class="fa fa-clipboard-list color-red-dark fa-3x mt-5"></i>
<h1 class="pt-4">TAREAS</h1>
<p class="font-11 opacity-50 mt-n1">TRABAJO POR HACER</p>
</div>
</a>

</div>
<div class="row text-center mb-0">
    <a href="#" data-menu="coming-soon" class="col-6 pe-0">
    <div class="card card-style me-2 mb-2">
    <i class="fa fa-mail-bulk color-info-dark fa-3x mt-5"></i>
    <h1 class="pt-4">BUZÓN</h1>
    <p class="font-11 opacity-50 mt-n1">CHATS ENTRE COMPAÑEROS</p>
    </div>
    </a>
    <a href="#" data-menu="coming-soon" class="col-6 ps-0">
    <div class="card card-style ms-2 mb-3">
    <i class="fa fa-sticky-note color-yellow-dark fa-3x mt-5"></i>
    <h1 class="pt-4">NOTAS</h1>
    <p class="font-11 opacity-50 mt-n1">TOMA APUNTES Y GUARDALOS</p>
    </div>
    </a>
   <!-- <a href="#" data-menu="menu-coches" class="col-6 pe-0">
    <div class="card card-style me-2 mb-2">
    <i class="fa fa-car color-blue-dark fa-3x mt-5"></i>
    <h1 class="pt-4">VEHICULOS</h1>
    <p class="font-11 opacity-50 mt-n1">ITV, SEGUROS Y CONSULTAS</p>
    
    </div>
    </a>
    <a href="#" data-menu="coming-soon" class="col-6 ps-0">
    <div class="card card-style ms-2 mb-3">
    <i class="fa fa-sticky-note color-yellow-dark fa-3x mt-5"></i>
    <h1 class="pt-4">NOTAS</h1>
    <p class="font-11 opacity-50 mt-n1">PERSONALES Y RECORDATORIOS</p>
    </div>
    </a> -->
    
    </div>

<!-- Layout Required All Views -->
</div></div>
<!-- End Layout Required All Views -->

@include('layouts.partials.menu-coches')

@endsection