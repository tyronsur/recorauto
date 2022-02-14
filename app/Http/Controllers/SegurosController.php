<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use App\Models\Seguro;
use Illuminate\Http\Request;

class SegurosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coches = Coche::all();
        $seguros = Seguro::all();
        return view('coches.seguros.index', compact('coches', 'seguros'));
    }
}
