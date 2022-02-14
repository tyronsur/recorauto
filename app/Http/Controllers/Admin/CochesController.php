<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCoche;
use App\Http\Requests\UpdateCoche;
use App\Models\Coche;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;

class CochesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $coches = Coche::orderBy('id', 'desc')->paginate();
        
        return view('housekeeping.coches.index', compact('coches'));
    }
    public function create(){
        return view('housekeeping.coches.create');
    }
    public function store(StoreCoche $request){
    /*    $coche = new Coche();

        $coche->matricula = $request->matricula;
        $coche->modelo = $request->modelo;
        $coche->logo = $request->logo;
        $coche->combustion = $request->combustion;
        $coche->anticongelante = $request->anticongelante;
        $coche->aceite = $request->aceite;

        $coche->save(); */

        $coche = Coche::create($request->all());

        return redirect()->route('housekeeping.coches.edit', $coche)->with('info', 'Vehiculo Añadido a la base de datos.');
    }

    public function edit(Coche $coche){
        return view('housekeeping.coches.edit', compact('coche'));
    }

    //Actualizar DB
    public function update(UpdateCoche $request, Coche $coche){

/*        $coche->matricula = $request->matricula;
        $coche->modelo = $request->modelo;
        $coche->logo = $request->logo;
        $coche->combustion = $request->combustion;
        $coche->anticongelante = $request->anticongelante;
        $coche->aceite = $request->aceite;
        $coche->save(); */
        $coche->update($request->all());

        return redirect()->route('housekeeping.coches.edit', $coche)->with('info', 'La Información del Vehiculo se ha Actualizado Correctamente.');
    }

    public function destroy(Coche $coche){
        $coche->delete();
        return redirect()->route('housekeeping.coches.index')->with('info', 'Vehiculo Eliminado.');
    }
}
