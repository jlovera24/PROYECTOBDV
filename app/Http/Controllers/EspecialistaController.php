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
        $cargo = Cargo::all();
        $gerencia = Gerencia::all();
        $ubicacion_fisica = Ubicacion_Fisica::all();

        return view('admin.Especialistas.create', compact('especialista', 'cargo', 'gerencia', 'ubicacion_fisica'));
    }

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
        $especialista->apellido = $request->post('apellidos');
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


        <div class="col-md-4">
        <label for="nombres" class="form-label">Nombres</label>
    v class="col-md-4">
        <label for="apellidos" class="form-label">Apellidos</label>
    ="col-md-2">
        <label for="cedula" class="form-label">Cédula de Identidad</label>
    2">
        <label for="fech_nacimiento" class="form-label">Fecha de Nacimiento</label>
    ss="col-md-3">
        <label for="nm_ct" class="form-label">NM o CT de usuario</label>
    d-3">
        <label for="fec_ing" class="form-label">Fecha Ingreso Institución</label>
     <label for="fec_ing_dpto" class="form-label">Fecha Ingreso al Departamento</label>
    ss="col-md-3">
        <label for="email" class="form-label">Correo Corporativo</label>
    div class="col-md-2">
      <label for="bl_cargos_id" class="form-label">Cargo:</label>
    ass="col-md-2">
      <label for="bl_gerencias_id" class="form-label">Gerencia:</label>
    <label for="bl_ubicaciones_fisicas_id" class="form-label">Ubicación Física:</label>
    col-md-3">
      <label for="operadora" class="form-label">Operadora Telefónica</label>
    "col-md-3">
        <label for="telefono" class="form-label">Número de Teléfono</label>
    class="col-md-3">
        <label for="descripcion" class="form-label">Dirección</label>

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
