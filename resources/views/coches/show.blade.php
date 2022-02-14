@extends('layouts.plantilla')

@section('title', $coche->modelo . ' [' . $coche->matricula . ']')

@section('content')

@foreach ($citaitvs as $citaitv)
    <div class="card card-style gradient-highlight shadow-bg shadow-bg-m">
        <div class="content">
        <div class="d-flex">
        <div class="align-self-center">
        <h4 class="color-white font-700 text-uppercase font-12 mb-n1 mt-n2 opacity-80">CITA ITV ENCONTRADA:</h4>
        <h3 class="color-white mb-2">{{$citaitv->fecha}}<br>Hora: {{$citaitv->hora}}</h3>
        <h4 class="color-white font-700 text-uppercase font-14 mb-n1 mt-n2 opacity-100">Nota: {{$citaitv->nota}}</h4>
        </div>
        <div class="ms-auto align-self-center">
        <i class="fa fa-exclamation-triangle fa-2x color-white"></i>
        </div>
        </div>
        </div>
        </div>
@endforeach

<div class="card card-style">
        <div class="content">
        <div class="d-flex">
        <div class="align-self-center">
        
        <h1 class="mb-0 font-20">MANTENIMIENTO</h1>
        </div>
        <div class="align-self-center ms-auto">
        <a href="#" data-menu="menu-wizard-step-1" class="btn btn-xxs shadow-bg shadow-bg-xs gradient-blue color-white rounded-s font-700 text-uppercase">EMPEZAR</a>
        </div>
        </div>
        </div>
        </div>
        <div class="card card-style">
            <div class="content">
            <div class="d-flex">
            <div class="align-self-center">
            <h1 class="mb-0 font-20">CAMBIO DE ACEITE</h1>
            </div>
            <div class="align-self-center ms-auto">
            <a href="#" class="btn btn-xxs shadow-bg shadow-bg-xs gradient-blue color-white rounded-s font-700 text-uppercase">EMPEZAR</a>
            </div>
            </div>
            </div>
            </div>

            <div class="card card-style">
                <div class="content mt-0 mb-0">
                <div class="list-group list-custom-small list-icon-0">
                <a href="#" data-menu="info-vehiculo"><i class="fa fa-info-circle color-blue-dark"></i><span>INFORMACIÓN DEL VEHICULO</span><i class="fa fa-angle-right"></i></a>
                
                <a href="#" data-menu="log-mant"><i class="fa fa-history color-blue-dark"></i><span>HISTORIAL MANTENIMIENTOS</span><i class="fa fa-angle-right"></i></a>
                <a href="#" data-menu="menu-action-over"><i class="fa fa-history color-blue-dark"></i><span>HISTORIAL CAMBIOS DE ACEITE</span><i class="fa fa-angle-right"></i></a>
                </div>
                </div>
                </div>



            </div></div>

    <div id="info-vehiculo" class="bg-white menu menu-box-left" data-menu-width="320" data-menu-effect="menu-push">
        <div class="d-flex">
        <a href="#" class="close-menu flex-fill icon icon-m text-center color-red-dark border-bottom"><i class="fa font-12 fa-times"></i></a>
        <a href="#" class="flex-fill icon icon-m text-center color-facebook border-bottom border-right"><B>INFORMACIÓN DEL VEHICULO</B> <i class="fa font-12 fa-car"></i></a></div>
        <div class="ps-3 pe-3 pt-3 mt-4 mb-2">
        <div class="d-flex">
        <div class="me-3">
        <img src="{{$coche->logo}}" width="43">
        </div>
        <div class="flex-grow-1">
        <h1 class="font-20 font-700 mb-0">{{$coche->modelo}}</h1>
        <p class="mt-n2  font-14 font-400">{{$coche->matricula}}</p>
        </div>
        </div>
        </div>
        <div class="me-3 ms-3">
        <span class="text-uppercase font-900 font-11 opacity-30">Datos relevantes</span>
        <div class="list-group list-custom-small">
        <a href="" class="close-menu">
        <i class="fa font-14 fa-gas-pump rounded-xl bg-blue-dark"></i>
        <span><b>Combustion:</b> {{$coche->combustion}}</span>
        </a>
        <a href="" class="close-menu">
        <i class="fa font-14 fa-oil-can rounded-xl bg-blue-dark"></i>
        <span><b>Aceite:</b> {{$coche->aceite}}</span>
        </a>
        <a href="" class="close-menu">
        <i class="fa font-14 fa-snowflake rounded-xl bg-blue-dark"></i>
        <span><b>Anticongelante:</b> {{$coche->anticongelante}}</span>
        </a>
        <a href="" class="close-menu">
        <i class="fa font-14 fa-eye rounded-xl bg-blue-dark"></i>
        <span><b>Ultima Revisión:</b> -</span>
        </a>
        
        </div>
        </div>
        
        <div class="me-3 ms-3  mt-2">
        <span class="text-uppercase font-900 font-11 opacity-30">Datos de la itv</span>
        <div class="list-group list-custom-small">
        <a href="" class="close-menu">
        <i class="fa font-14 fa-clock rounded-xl bg-green-dark"></i>
        <span><b>Valida Hasta: {{$coche->itv->expira}}</b></span>
        </a>
        <a href="" class="close-menu">
            <i class="fa font-14 fa-check rounded-xl bg-green-dark"></i>
            <span><b>Estado: {{$coche->itv->estado}}</b></span>
            </a>
        
        </div>
        </div>
        <div class="me-3 ms-3 mt-2">
        <span class="text-uppercase font-900 font-11 opacity-30">Datos del Seguro</span>
        <div class="list-group list-custom-small">
        <a href="" class="close-menu">
        <i class="fa font-14 fa-passport rounded-xl bg-red-dark"></i>
        <span><b>Poliza:</b> {{$coche->seguro->npoliza}}</span>
        </a>
        <a href="" class="close-menu">
        <i class="fa font-14 fa-briefcase rounded-xl bg-red-dark"></i>
        <span><b>Compa&ntilde;ia:</b> {{$coche->seguro->aseguradora}}</span>
        </a>
        <a href="" class="close-menu">
        <i class="fa font-14 fa-clock rounded-xl bg-red-dark"></i>
        <span><b>Valido Hasta:</b> {{$coche->seguro->expira}}</span>
        </a>
        
        </div>
        </div>
        
        
        </div>

        <div id="log-mant" class="bg-white menu menu-box-right" data-menu-width="320" data-menu-effect="menu-push">
            <div class="d-flex">
            <a href="#" class="flex-fill icon icon-m text-center color-facebook border-bottom border-right"><i class="fa font-12 fa-tools"></i> <B>HISTORIAL DE MANTENIMIENTO</B></a>
            <a href="#" class="close-menu flex-fill icon icon-m text-center color-red-dark border-bottom"><i class="fa font-12 fa-times"></i></a>
            </div>
            <div class="me-3 ms-3">
            <span class="text-uppercase font-900 font-11 opacity-30">Fecha - Responsable</span>
            <div class="list-group list-custom-small">
            

            <a href="#" data-menu="open-log-mant-idlog">
            <i class="fa font-14 fa-eye rounded-xl bg-blue-dark"></i>
            <span><b>[fecha]</b> user</span>
            </a>
            
            
            </div>
            </div>
            </div>

            <div id="open-log-mant-idlog" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="405">
                <div class="menu-title"><h1>Mantenimiento #</h1><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
                <div class="divider divider-margins mb-1 mt-1"></div>
                <div class="content">
                <div class="row mb-0">
                
                <div class="col-10 ps-1">
                <div class="d-flex">
                <div><p class="font-700 color-theme ps-2">Responsable</p></div>
                <div class="ms-auto"><p>user</p></div>
                </div>
                <div class="d-flex">
                <div><p class="font-700 color-theme ps-2">Fecha</p></div>
                <div class="ms-auto"><p>fecha</p></div>
                </div>
                </div>
                </div>
                <div class="divider mt-1 mb-2"></div>
                <div class="row mb-0">
                <div class="col-6"><h3 class="font-14">Nivel Aceite:</h3></div>
                <div class="col-6"><h3 class="font-14 text-end">oil</h3></div>
                <div class="divider divider-margins w-100 mt-1 mb-1"></div>
                <div class="col-6"><h3 class="font-14 mt-1">Anticongelante:</h3></div>
                <div class="col-6"><h3 class="font-14 text-end mt-1">cc</h3></div>
                <div class="divider divider-margins w-100 mt-1 mb-1"></div>
                <div class="col-6"><h3 class="font-14 mt-1">Limpia-parabrisas:</h3></div>
                <div class="col-6"><h3 class="font-14 text-end mt-1">lp</h3></div>
                <div class="divider divider-margins w-100 mt-1 mb-1"></div>
                <div class="col-6"><h3 class="font-14 mt-1">Acciones:</h3></div>
                <div class="col-6"><h3 class="font-14 text-end mt-1">accion</h3></div>
                <div class="divider divider-margins w-100 mt-1 mb-1"></div>
                <div class="col-6"><h3 class="font-14 mt-1">Anotaciones:</h3></div>
                <div class="col-6"><h3 class="font-14 text-end mt-1">nota</h3></div>
                </div>
                </div>
                </div>
                @include('layouts.partials.menu-coches')

                @if (session('citaitv'))
                <a data-menu="fitv-success" data-auto-show-ad="0"></a>
                <div id="fitv-success" class="menu menu-box-left" data-menu-height="cover" data-menu-width="cover">
                    <div class="card card-style bg-transparent shadow-0 mb-0" style="height:100%;">
                    <div class="card-center text-center">
                    <i class="fa fa-check-circle scale-box color-green-dark fa-5x pb-3"></i>
                    <h1>Citas Itv Dice:</h1>
                    <p class="px-3 mb-5">
                        {{session('citaitv')}}
                    </p>
                    </div>
                    <div class="card-bottom mb-5 pb-3">
                    <a href="#" class="close-menu btn btn-full btn-m rounded-m bg-red-dark font-700 text-uppercase">Terminar</a>
                    </div>
                    </div>
                    </div>

@endif
                @endsection