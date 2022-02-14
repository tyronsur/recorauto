<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use App\Models\Itv;
use Illuminate\Http\Request;

class ItvsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coches = Coche::all();
        $itvs = Itv::all();
        return view('coches.itvs.index', compact('coches', 'itvs'));
    }

}
