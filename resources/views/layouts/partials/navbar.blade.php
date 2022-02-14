<div class="header header-fixed header-logo-center">
    <a href="" class="header-title">@yield('title')</a>
    <a href="" class="header-icon header-icon-1"  data-toggle-theme ><i class="fas fa-lightbulb"></i></a>
    <a href="{{ route('housekeeping.home') }}" class="header-icon header-icon-2"><i class="fas fa-tools"></i></a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
    <a href="{{ route('logout') }}"
    onclick="event.preventDefault();
     this.closest('form').submit();" class="header-icon header-icon-4">
<i class="fas fa-power-off"></i></a>
</form></div>
<div id="footer-bar" class="footer-bar-3">
    <a href="#box" data-menu="coming-soon"><i class="fa fa-box-open"></i><span>ALMAC&Eacute;N</span></a>
        <a href="#itv" data-menu="coming-soon"><i class="fa fa-clock"></i><span>RUTAS</span></a>
        <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active-nav' : ''}}"><i class="fa fa-industry"></i><span>HOME</span></a>
        <a href="#" data-menu="menu-coches" class="{{request()->routeIs('coches.*','itvs.*','seguros.*') ? 'active-nav' : ''}}"><i class="fa fa-car"></i><span>VEHICULOS</span></a>
        <!-- <a href="#seguros"><i class="fa fa-tools"></i><span>CONFIGURACI&Oacute;N</span></a>
        <a href="#" data-menu="coming-soon"><i class="fa fa-sticky-note"></i><span>NOTAS</span></a> -->
</div>