<?php

namespace App\Http\Controllers;

use App\Models\Especialista;
use App\Models\Telefono;
use App\Models\Direccion;
use App\Models\Cargo;
use App\Models\Gerencia;
use App\Models\Ubicacion_Fisica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EspecialistaController extends Controller
{
    //
    public function index()
    {

        $especialista = Especialista::all();
        $cargo = Cargo::all();
        $gerencia = Gerencia::all();
        $ubicacion_fisica = Ubicacion_Fisica::all();
        return view('admin.Especialistas.index', compact('especialista', 'cargo', 'gerencia', 'ubicacion_fisica'));
        /*return view('admin.Solicitantes.index', compact('solicitante', 'all'));*/

        
    }

    public function create()
    {
        //$ubicacion_fisica = ubicacion_fisica::all();

        /*$gerencia = Gerencia::pluck('nombre','id');*/
        $especialista = Especialista::all();
        return view('admin.Especialistas.create', compact('especialista'));
    }

    public function store(Request $request)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $especialista = new Especialista();
        $telefono = new Telefono();
        $direccion = new Direccion();
        $especialista->nombres = $request->post('nombres');
        $especialista->apellido = $request->post('apellido');
        $especialista->cedula = $request->post('cedula');
        $especialista->fec_naci = $request->post('fec_naci');
        $especialista->nm_ct = $request->post('nm_ct');
        $especialista->fec_ing = $request->post('fec_ing');
        $especialista->fec_ing_dpto = $request->post('fec_ing_dpto');
        $especialista->email = $request->post('email');
        $telefono->telefono = $request->post('telefono');
        $telefono->operadora = $request->post('operadora');
        $direccion->descripcion = $request->post('descripcion');
        $direccion->ciudades_id = $request->post('ciudades_id');
        $direccion->estados_id = $request->post('estados_id');
        $direccion->parroquias_id = $request->post('parroquias_id');
        $direccion->municipios_id = $request->post('municipios_id');
        $especialista->bl_cargos_id = $request->post('bl_cargos_id');
        $especialista->bl_ubicaciones_id = $request->post('bl_ubicaciones_id');
        $especialista->bl_gerencias_id = $request->post('bl_gerencias_id');
        $especialista->save(); 
        $telefono->save();
        $direccion->save();

        return redirect()->route("especialista.index")->with("success", "¡Registro agregado exitosamente!");
    }

    public function show($id)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $especialista = Especialista::find($id);
        
        return view("admin.Especialistas.delete", compact('especialista'));
    }

    public function edit($id)
    {
        //$ubicacion_fisica = Gerencia::all();
        $especialista = Especialista::find($id);
        return view("admin.Especialistas.edit", compact('especialista'));
        
    }

    public function update(Request $request, $id)
    {
        //$ubicacion_fisica = Ubicacion_Fisica::all();
        $especialista = Especialista::find($id);
        $especialista->nombres = $request->post('nombres');
        $especialista->apellido = $request->post('apellido');
        $especialista->email = $request->post('email');
        $especialista->bl_gerencias_id = $request->post('bl_gerencias_id');
        $especialista->save();

        return redirect()->route("especialista.index")->with("success", "¡Actualización realizada exitosamente!");
    }

    public function destroy($id)
    {
        //$ubicacion_fisica = Ubicacion_Fisica::all();
        $especialista = Especialista::find($id);
        $especialista->delete();
        return redirect()->route("especialista.index")->with("success", "¡Se ha eliminado el registro seleccionado!");
        
    }

}