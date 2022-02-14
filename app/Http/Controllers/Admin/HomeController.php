<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coche;
use App\Models\Ruta;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $users = User::all();
        $coches = Coche::all();
        $rutas = Ruta::all();

        return view('housekeeping.index', compact('users', 'coches', 'rutas'));
    }
}
