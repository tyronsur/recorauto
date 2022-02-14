@extends('adminlte::page')

@section('title', 'Escritorio')

@section('content_header')
    <h1>Escritorio</h1>
@stop

@section('content')

<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-6">
  <x-adminlte-small-box title="{{ $users->count() }}" text="Usuarios" icon="fas fa-users text-dark"
    theme="warning" url="#" url-text="Ver lista de usuarios"/>
</div>
<div class="col-lg-4 col-6">
  <x-adminlte-small-box title="{{ $rutas->count() }}" text="Rutas" icon="fas fa-map-signs text-dark"
          theme="info" url="{{route('housekeeping.rutas.index')}}" url-text="Ver lista de rutas"/>
</div>
    <div class="col-lg-4 col-6">
      <x-adminlte-small-box title="{{ $coches->count() }}" text="Vehiculos" icon="fas fa-car text-dark"
          theme="danger" url="{{route('housekeeping.coches.index')}}" url-text="Ver lista de vehiculos"/>
          </div>
                       <div class="col-lg-4 col-6">
                        <x-adminlte-small-box title="0" text="Mapas" icon="fas fa-directions text-dark"
                            theme="primary" url="#" url-text="Ver lista de mapas"/>
                            </div>
                            <div class="col-lg-4 col-6">
                              <x-adminlte-small-box title="0" text="Mantenimientos" icon="fas fa-tools text-dark"
                                  theme="secondary" url="#" url-text="Ver lista de mantenimientos"/>
                                  </div>
                                  <div class="col-lg-4 col-6">
                                    <x-adminlte-small-box title="0" text="Cambios de Aceite" icon="fas fa-oil-can text-dark"
                                        theme="success" url="#" url-text="Ver lista de cambios de aceite"/>
                                        </div> 
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
let timerInterval
Swal.fire({
    icon: 'warning',
  title: 'En Desarrollo!',
  html: 'Cerrando en <b></b> Milisegundos.',
  timer: 2000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
    </script>
@stop