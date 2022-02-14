<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCoche;
use App\Http\Requests\UpdateCoche;
use App\Models\Citaitv;
use App\Models\Coche;
use App\Models\Itv;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;

class CochesController extends Controller
{
    public function index(){

        $coches = Coche::orderBy('id', 'desc')->paginate(50);
        
        return view('coches.index', compact('coches'));
    }
    public function create(){
        return view('coches.create');
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

        return redirect()->route('coches.show', $coche);
    }
    public function show(Coche $coche){
        $citaitvs = Citaitv::where('coche_id', $coche->id)->get();
        return view('coches.show', compact('coche', 'citaitvs'));
    }

    public function edit(Coche $coche){
        return view('coches.edit', compact('coche'));
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

        return redirect()->route('coches.show', $coche);
    }

    public function destroy(Coche $coche){
        $coche->delete();
        return redirect()->route('coches.index');
    }

}
