@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')



<div class="row text-center mb-0">
<div class="menu-title"><h1>Working Hours</h1><p class="color-highlight">Flexible and Easy to Use</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
<div class="divider divider-margins mb-4 mt-3"></div>
<div class="content mt-n4 pb-3">
 

<div data-day="Monday" class="working-hours"><p>Monday</p> <p>09:00 AM</p> <p>05:00 PM</p></div>
<div data-day="Tuesday" class="working-hours bg-red-dark"><p class="color-white">Tuesday</p> <p class="color-white">09:00 AM</p> <p class="color-white">05:00 PM</p></div>
<div data-day="Wednesday" class="working-hours"><p>Wednesday</p> <p>09:00 AM</p> <p>05:00 PM</p></div>
<div data-day="Thursday" class="working-hours"><p>Thursday</p> <p>09:00 AM</p> <p>05:00 PM</p></div>
<div data-day="Friday" class="working-hours"><p>Friday</p> <p>09:00 AM</p> <p>05:00 PM</p></div>
<div data-day="Saturday" class="working-hours"><p>Saturday</p> <p>09:00 AM</p> <p>01:00 PM</p></div>
<div data-day="Sunday" class="working-hours"><p>Sunday</p> <p class="opacity-00">-</p> <p>We're Closed</p></div>
</div>

<!-- Layout Required All Views -->
</div></div>
<!-- End Layout Required All Views -->

@include('layouts.partials.menu-coches')

@endsection