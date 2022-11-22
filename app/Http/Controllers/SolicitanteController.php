<?php

namespace App\Http\Controllers;



use App\Models\Solicitante;
use App\Models\Gerencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolicitanteController extends Controller
{
    //
    public function index()
    {
//Investigar helpers dd
        $solicitante = Solicitante::all();
        $gerencia = Gerencia::all();
        return view('admin.Solicitantes.index', compact('solicitante', 'gerencia'));

    // $users = DB::table('bl_gerencias')
    // ->join('bl_solicitantes', 'bl_gerencias.id', '=', 'bl_solicitantes.bl_gerencias_id')
    // ->get('gerencia');

        /*return view('admin.Solicitantes.index', compact('solicitante', 'all'));*/

        
    }

    public function create()
    {
        //$ubicacion_fisica = ubicacion_fisica::all();

        /*$gerencia = Gerencia::pluck('nombre','id');*/
        $gerencia = Gerencia::all();
        return view('admin.Solicitantes.create', compact('gerencia'));
    }

    public function store(Request $request)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $solicitante = new Solicitante();
        $gerencia = Gerencia::all();
        $solicitante->nombres = $request->post('nombres');
        $solicitante->apellido = $request->post('apellido');
        $solicitante->email = $request->post('email');
        $solicitante->bl_gerencias_id = $request->post('bl_gerencias_id');
        $solicitante->save(); 

        return redirect()->route("solicitante.index")->with("success", "¡Registro agregado exitosamente!");
    }

    public function show($id)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $solicitante = Solicitante::find($id);
        
        return view("admin.Solicitantes.delete", compact('solicitante'));
    }

    public function edit($id)
    {
        //$ubicacion_fisica = Gerencia::all();
        $solicitante = Solicitante::find($id);
        $gerencia = Gerencia::all();
        return view("admin.Solicitantes.edit", compact('solicitante', 'gerencia'));
        
    }

    public function update(Request $request, $id)
    {
        //$ubicacion_fisica = Ubicacion_Fisica::all();
        $solicitante = Solicitante::find($id);
        $solicitante->nombres = $request->post('nombres');
        $solicitante->apellido = $request->post('apellido');
        $solicitante->email = $request->post('email');
        $solicitante->bl_gerencias_id = $request->post('bl_gerencias_id');
        $solicitante->save();

        return redirect()->route("solicitante.index")->with("success", "¡Actualización realizada exitosamente!");
    }

    public function destroy($id)
    {
        //$ubicacion_fisica = Ubicacion_Fisica::all();
        $solicitante = Solicitante::find($id);
        $solicitante->delete();
        return redirect()->route("solicitante.index")->with("success", "¡Se ha eliminado el registro seleccionado!");
        
    }

}
