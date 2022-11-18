<?php

namespace App\Http\Controllers;

use App\Models\Libra;
use Illuminate\Http\Request;

class LibraController extends Controller
{
    //
    public function index()
    {
        $libra = Libra::all();
        return view('admin.Libras.index', compact('libra'));
    }

    public function create()
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        return view('admin.Libras.create');
    }

    public function store(Request $request)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $libra = new Libra();
        $libra->nom_aplicacion = $request->post('nom_aplicacion');
        $libra->codigo = $request->post('codigo');
        $libra->acronimo = $request->post('acronimo');
        $libra->observaciones = $request->post('acronimo');
        $libra->save();

        return redirect()->route("libra.index")->with("success", "¡Registro agregado exitosamente!");
    }

    public function show($id)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $libra = Libra::find($id);
        return view("admin.Libras.delete", compact('libra'));
    }

    public function edit($id)
    {
        //$ubicacion_fisica = Gerencia::all();
        $libra = Libra::find($id);
        return view("admin.Libras.edit", compact('libra'));
        
    }

    public function update(Request $request, $id)
    {
        //$ubicacion_fisica = Ubicacion_Fisica::all();
        $libra = Libra::find($id);
        $libra->nom_aplicacion = $request->post('nom_aplicacion');
        $libra->codigo = $request->post('codigo');
        $libra->acronimo = $request->post('acronimo');
        $libra->observaciones = $request->post('observaciones');
        $libra->save();

        return redirect()->route("libra.index")->with("success", "¡Actualización realizada exitosamente!");
    }

    public function destroy($id)
    {
        //$ubicacion_fisica = Ubicacion_Fisica::all();
        $libra = Libra::find($id);
        $libra->delete();
        return redirect()->route("libra.index")->with("success", "¡Se ha eliminado el registro seleccionado!");
        
    }

}
