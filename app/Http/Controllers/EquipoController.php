<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Especialista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipoController extends Controller
{
    //
    public function index()
    {
//Investigar helpers dd
        $equipo = Equipo::all();
        $especialista = Especialista::all();
        return view('admin.Equipos.index', compact('equipo', 'especialista'));

    // $users = DB::table('bl_gerencias')
    // ->join('bl_solicitantes', 'bl_gerencias.id', '=', 'bl_solicitantes.bl_gerencias_id')
    // ->get('gerencia');

        /*return view('admin.Solicitantes.index', compact('solicitante', 'all'));*/

        
    }

    public function create()
    {
        //$ubicacion_fisica = ubicacion_fisica::all();

        /*$gerencia = Gerencia::pluck('nombre','id');*/
        $equipo = Equipo::all();
        $especialista = Especialista::all();
        return view('admin.Equipos.create', compact('equipo', 'especialista'));
    }

    public function store(Request $request)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $equipo = new Equipo();
        $equipo->tipo_equipo = $request->post('tipo_equipo');
        $equipo->estatus = $request->post('estatus');
        $equipo->ubicacion = $request->post('ubicacion');
        $equipo->serial = $request->post('serial');
        $equipo->bl_especialistas_id = $request->post('bl_especialistas_id');
        $equipo->save(); 

        return redirect()->route("equipo.index")->with("success", "¡Registro agregado exitosamente!");
    }

    public function show($id)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $equipo = Equipo::find($id);
        $especialista = Especialista::all();
        
        return view("admin.Equipos.delete", compact('equipo', 'especialista'));
    }

    public function edit($id)
    {
        //$ubicacion_fisica = Gerencia::all();
        $equipo = Equipo::find($id);
        $especialista = Especialista::all();
        return view("admin.Equipos.edit", compact('equipo', 'especialista'));
        
    }

    public function update(Request $request, $id)
    {
        //$ubicacion_fisica = Ubicacion_Fisica::all();
        $equipo = Equipo::find($id);
        $equipo->tipo_equipo = $request->post('tipo_equipo');
        $equipo->estatus = $request->post('estatus');
        $equipo->ubicacion = $request->post('ubicacion');
        $equipo->serial = $request->post('serial');
        $equipo->bl_especialistas_id = $request->post('bl_especialistas_id');
        $equipo->save();

        return redirect()->route("equipo.index")->with("success", "¡Actualización realizada exitosamente!");
    }

    public function destroy($id)
    {
        //$ubicacion_fisica = Ubicacion_Fisica::all();
        $equipo = Equipo::find($id);
        $equipo->delete();
        return redirect()->route("equipo.index")->with("success", "¡Se ha eliminado el registro seleccionado!");
        
    }

}
