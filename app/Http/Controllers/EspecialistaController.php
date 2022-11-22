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

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index()
    {

        $especialista = Especialista::all();
        $cargo = Cargo::all();
        $gerencia = Gerencia::all();
        $ubicacion_fisica = Ubicacion_Fisica::all();
        $telefono = Telefono::all();
        $direccion = Direccion::all();
        return view('admin.Especialistas.index', compact('especialista', 'cargo', 'gerencia', 'ubicacion_fisica', 'telefono', 'direccion'));
        /*return view('admin.Solicitantes.index', compact('solicitante', 'all'));*/

        
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function create()
    {
        //$ubicacion_fisica = ubicacion_fisica::all();

        /*$gerencia = Gerencia::pluck('nombre','id');*/
        $especialista = Especialista::all();
        $cargo = Cargo::all();
        $gerencia = Gerencia::all();
        $ubicacion_fisica = Ubicacion_Fisica::all();

        return view('admin.Especialistas.create', compact('especialista', 'cargo', 'gerencia', 'ubicacion_fisica'));
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function store(Request $request)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $especialista = new Especialista();
        $cargo = new Cargo();
        $gerencia = new Gerencia();
        $ubicacion_fisica = new Ubicacion_Fisica();
        $telefono = new Telefono();
        $direccion = new Direccion();

        $especialista->nombres = $request->post('nombres');
        $especialista->apellidos = $request->post('apellidos');
        $especialista->cedula = $request->post('cedula');
        $especialista->fech_nacimiento = $request->post('fech_nacimiento');
        $especialista->nm_ct = $request->post('nm_ct');
        $especialista->fec_ing = $request->post('fec_ing');
        $especialista->fec_ing_dpto = $request->post('fec_ing_dpto');
        $especialista->email = $request->post('email');
        $especialista->bl_cargos_id = $request->post('bl_cargos_id');
        $especialista->bl_gerencias_id = $request->post('bl_gerencias_id');
        $especialista->bl_ubicaciones_fisicas_id = $request->post('bl_ubicaciones_fisicas_id');

        $telefono->operadora = $request->post('operadora');
        $telefono->telefono = $request->post('telefono');

        $direccion->descripcion = $request->post('descripcion');

        $especialista->save(); 
        $telefono->save();
        $direccion->save();

        return redirect()->route("especialista.index")->with("success", "¡Registro agregado exitosamente!");
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function show($id)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $especialista = Especialista::find($id);
        
        return view("admin.Especialistas.delete", compact('especialista'));
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function edit($id)
    {
        //$ubicacion_fisica = Gerencia::all();
        
        $especialista = Especialista::find($id);
        $cargo = Cargo::all();
        $gerencia = Gerencia::all();
        $ubicacion_fisica = Ubicacion_Fisica::all();

        $direccion = Direccion::find($id);
        $telefono = Telefono::find($id);

        return view("admin.Especialistas.edit", compact('especialista', 'direccion', 'telefono', 'cargo', 'gerencia', 'ubicacion_fisica'));
        
    }
    
   
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function update(Request $request, $id)
    {
        //$ubicacion_fisica = Ubicacion_Fisica::all();

        $especialista = Especialista::find($id);
        

        $especialista->nombres = $request->post('nombres');
        $especialista->apellidos = $request->post('apellidos');
        $especialista->cedula = $request->post('cedula');
        $especialista->fech_nacimiento = $request->post('fech_nacimiento');
        $especialista->nm_ct = $request->post('nm_ct');
        $especialista->fec_ing = $request->post('fec_ing');
        $especialista->fec_ing_dpto = $request->post('fec_ing_dpto');
        $especialista->email = $request->post('email');
        $especialista->bl_cargos_id = $request->post('bl_cargos_id');
        $especialista->bl_gerencias_id = $request->post('bl_gerencias_id');
        $especialista->bl_ubicaciones_fisicas_id = $request->post('bl_ubicaciones_fisicas_id');

        $telefono->operadora = $request->post('operadora');
        $telefono->telefono = $request->post('telefono');

        $direccion->descripcion = $request->post('descripcion');

        $especialista->save(); 
        $telefono->save();
        $direccion->save();
        
        
        return redirect()->route("especialista.index", compact('especialista', 'cargo', 'gerencia', 'ubicacion_fisica'))->with("success", "¡Actualización realizada exitosamente!");
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function destroy($id)
    {
        //$ubicacion_fisica = Ubicacion_Fisica::all();
        $especialista = Especialista::find($id);
        $especialista->delete();
        return redirect()->route("especialista.index")->with("success", "¡Se ha eliminado el registro seleccionado!");
        
    }

}
