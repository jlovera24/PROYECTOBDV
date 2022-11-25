<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion_Fisica;
use Illuminate\Http\Request;

class Ubicacion_FisicaController extends Controller
{
    //
    public function index()
    {
        $ubicacion_fisica = Ubicacion_Fisica::all();
        return view('admin.Ubicaciones_Fisicas.index', compact('ubicacion_fisica'));
    }

    public function create()
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        return view('admin.Ubicaciones_Fisicas.create');
    }

    public function store(Request $request)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $ubicacion_fisica = new Ubicacion_Fisica();
        $ubicacion_fisica->piso = $request->post('piso');
        $ubicacion_fisica->descripcion = $request->post('descripcion');
        $ubicacion_fisica->save();

        return redirect()->route("ubicacion_fisica.index")->with("success", "¡Registro agregado exitosamente!");
    }

    public function show($id)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $ubicacion_fisica = Ubicacion_Fisica::find($id);
        return view("admin.Ubicaciones_Fisicas.delete", compact('ubicacion_fisica'));
    }

    public function edit($id)
    {
        //$ubicacion_fisica = Gerencia::all();
        $ubicacion_fisica = Ubicacion_Fisica::find($id);
        return view("admin.Ubicaciones_Fisicas.edit", compact('ubicacion_fisica'));
        
    }

    public function update(Request $request, $id)
    {
        //$ubicacion_fisica = Ubicacion_Fisica::all();
        $ubicacion_fisica = Ubicacion_Fisica::find($id);
        $ubicacion_fisica->piso = $request->post('piso');
        $ubicacion_fisica->descripcion = $request->post('descripcion');
        $ubicacion_fisica->save();

        return redirect()->route("ubicacion_fisica.index")->with("success", "¡Actualización realizada exitosamente!");
    }

    public function destroy($id)
    {
        //$ubicacion_fisica = Ubicacion_Fisica::all();
        $ubicacion_fisica = Ubicacion_Fisica::find($id);
        $ubicacion_fisica->delete();
        return redirect()->route("ubicacion_fisica.index")->with("success", "¡Se ha eliminado el registro seleccionado!");
        
    }

}
