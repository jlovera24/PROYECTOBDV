<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    //
    public function index()
    {
        $cargo = Cargo::all();
        return view('admin.cargos.index', compact('cargo'));
    }

    public function create()
    {
        //$cargo = cargo::all();
        return view('admin.cargos.create');
    }

    public function store(Request $request)
    {
        //cargoa = cargo::all();
        $cargo = new Cargo();
        $cargo->nombre = $request->post('nombre');
        $cargo->save();

        return redirect()->route('cargo.index')->with("success", "¡Registro agregado exitosamente!");
    }

    public function show($id)
    {
        //$gerencia = Gerencia::all();
        $cargo = Cargo::find($id);
        return view("admin.cargos.delete", compact('cargo'));
    }

    public function edit($id)
    {
        //$cargo = cargo::all();
        $cargo = Cargo::find($id);
        return view("admin.cargos.edit", compact('cargo'));
        
    }

    public function update(Request $request, $id)
    {
        //$cargo = cargo::all();
        $cargo = Cargo::find($id);
        $cargo->nombre = $request->post('nombre');
        $cargo->save();

        return redirect()->route("cargo.index")->with("success", "¡Actualización realizada exitosamente!");
    }

    public function destroy($id)
    {
        //$cargo = cargo::all();
        $cargo = Cargo::find($id);
        $cargo->delete();
        return redirect()->route("cargo.index")->with("success", "¡Se ha eliminado el registro seleccionado!");
        
    }

}
