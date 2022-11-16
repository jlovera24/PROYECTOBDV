<?php

namespace App\Http\Controllers;

use App\Models\Gerencia;
use Illuminate\Http\Request;

class GerenciaController extends Controller
{
    //
    public function index()
    {
        $gerencia = Gerencia::all();
        return view('admin.Gerencias.index', compact('gerencia'));
    }

    public function create()
    {
        //$gerencia = Gerencia::all();
        return view('admin.Gerencias.create');
    }

    public function store(Request $request)
    {
        //$gerencia = Gerencia::all();
        $gerencia = new Gerencia();
        $gerencia->gerencia = $request->post('gerencia');
        $gerencia->gerencia_linea = $request->post('gerencia_linea');
        $gerencia->descripcion = $request->post('descripcion');
        $gerencia->save();

        return redirect()->route("gerencia.index")->with("success", "¡Registro agregado exitosamente!");
    }

    public function show()
    {
        //$gerencia = Gerencia::all();
        return view('admin.Gerencias.delete');
    }

}
