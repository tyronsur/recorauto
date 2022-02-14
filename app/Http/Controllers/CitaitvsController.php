<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCitaItv;
use App\Models\CitaItv;
use Illuminate\Http\Request;

class CitaitvsController extends Controller
{
    public function store(StoreCitaItv $request)
    {
        $citaitv = new CitaItv();

        $citaitv->coche_id = $request->coche_id;
        $citaitv->user_id = $request->user_id;
        $citaitv->fecha = $request->fecha;
        $citaitv->hora = $request->hora;
        $citaitv->nota = $request->nota;
        $citaitv->save();
        return redirect()->route('coches.show', $citaitv->coche_id)->with('citaitv', 'Cita añadida Correctamente.');
    }

}
