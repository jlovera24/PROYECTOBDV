<?php

namespace App\Http\Controllers;

use App\Models\Telefono;
use Illuminate\Http\Request;

class TelefonosController extends Controller
{
    //
    public function index()
    {
        $telefono = Telefono::all();
        return view('admin.Telefonos.index', compact('telefono'));
    }

    public function create()
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        return view('admin.Telefonos.create');
    }

    public function store(Request $request)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $telefono = new Telefono();
        $telefono->telefono = $request->post('telefono');
        $telefono->operadora = $request->post('operadora');
        $telefono->save();

        return redirect()->route("telefono.index")->with("success", "¡Registro agregado exitosamente!");
    }

    public function show($id)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $telefono = Telefono::find($id);
        return view("admin.Telefonos.delete", compact('telefono'));
    }

    public function edit($id)
    {
        //$ubicacion_fisica = Gerencia::all();
        $telefono = Telefono::find($id);
        return view("admin.Telefonos.edit", compact('telefono'));
        
    }

    public function update(Request $request, $id)
    {
        //$ubicacion_fisica = Ubicacion_Fisica::all();
        $telefono = Telefono::find($id);
        $telefono->telefono = $request->post('telefono');
        $telefono->operadora = $request->post('operadora');
        $telefono->save();

        return redirect()->route("telefono.index")->with("success", "¡Actualización realizada exitosamente!");
    }

    public function destroy($id)
    {
        //$ubicacion_fisica = Ubicacion_Fisica::all();
        $telefono = Telefono::find($id);
        $telefono->delete();
        return redirect()->route("telefono.index")->with("success", "¡Se ha eliminado el registro seleccionado!");
        
    }

}
