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
        $gerencia->vicepresidencia = $request->post('vicepresidencia');
        $gerencia->descripcion = $request->post('descripcion');
        $gerencia->save();

        return redirect()->route("gerencia.index")->with("success", "¡Registro agregado exitosamente!");
    }

    public function show($id)
    {
        //$gerencia = Gerencia::all();
        $gerencia = Gerencia::find($id);
        return view("admin.Gerencias.delete", compact('gerencia'));
    }

    public function edit($id)
    {
        //$gerencia = Gerencia::all();
        $gerencia = Gerencia::find($id);
        return view("admin.Gerencias.edit", compact('gerencia'));
        
    }

    public function update(Request $request, $id)
    {
        //$gerencia = Gerencia::all();
        $gerencia = Gerencia::find($id);
        $gerencia->gerencia = $request->post('gerencia');
        $gerencia->vicepresidencia = $request->post('vicepresidencia');
        $gerencia->descripcion = $request->post('descripcion');
        $gerencia->save();

        return redirect()->route("gerencia.index")->with("success", "¡Actualización realizada exitosamente!");
    }

    public function destroy($id)
    {
        //$gerencia = Gerencia::all();
        $gerencia = Gerencia::find($id);
        $gerencia->delete();
        return redirect()->route("gerencia.index")->with("success", "¡Se ha eliminado el registro seleccionado!");
        
    }

}
