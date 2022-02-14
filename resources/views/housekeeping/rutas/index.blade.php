@extends('adminlte::page')

@section('title', 'Rutas')

@section('content_header')
    <h1>Escritorio de Rutas</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th colspan="2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($rutas as $ruta)
                        <tr>
                            <td>{{$ruta->id}}</td>
                            <td>{{$ruta->name}}</td>
                            <td with="10px"><a class="btn btn-primary btn-sm" href="">Editar</a></td>
                            <td with="10px"><form action="" method="POST">
                            @csrf
                        @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form></td>
                        </tr>
                        @empty
                        <tr>
                        <td colspan="2">NO HAY RUTAS!</td>
                        </tr>
                        @endforelse
                </tbody>
            </table>
            
        </div></div></div>
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