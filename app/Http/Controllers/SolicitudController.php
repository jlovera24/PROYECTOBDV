<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Models\Especialista;
use App\Models\Solicitante;
use App\Models\Libra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolicitudController extends Controller
{

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function index()
    {
        $solicitud = Solicitud::all();
        $especialista = Especialista::all();
        $solicitante = Solicitante::all();
        $libra = Libra::all();
        return view('admin.Solicitudes.index', compact('solicitud', 'especialista', 'solicitante', 'libra'));
        /*return view('admin.Solicitantes.index', compact('solicitante', 'all'));*/
        
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function create()
    {
        //$ubicacion_fisica = ubicacion_fisica::all();

        /*$gerencia = Gerencia::pluck('nombre','id');*/
        $solicitud = Solicitud::all();
        $especialista = Especialista::all();
        $solicitante = Solicitante::all();
        $libra = Libra::all();

        return view('admin.Solicitudes.create', compact('especialista', 'solicitante', 'libra'));
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function store(Request $request)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $solicitud = Solicitud::all();
        $especialista = new Especialista();
        $solicitante = Solicitante::all();
        $libra = Libra::all();

        $solicitud->solicitud_id = $request->post('solicitud_id');
        $solicitud->tipo_solicitud = $request->post('tipo_solicitud');
        $solicitud->descripcion_solicitud = $request->post('descripcion_solicitud');
        $solicitud->prioridad = $request->post('prioridad');
        $solicitud->fecha_solicitud = $request->post('fecha_solicitud');
        $solicitud->calidad_fecha_ini = $request->post('calidad_fecha_ini');
        $solicitud->calidad_fecha_fin = $request->post('calidad_fecha_fin');
        $solicitud->fecha_cierre = $request->post('fecha_cierre');
        $solicitud->porcentaje_avance = $request->post('porcentaje_avance');
        $solicitud->estatus = $request->post('estatus');
        $solicitud->crq_calidad = $request->post('crq_calidad');
        $solicitud->crq_produccion = $request->post('crq_produccion');
        $solicitud->tipo_soporte = $request->post('tipo_soporte');

        $solicitud->bl_solicitantes_id = $request->post('bl_solicitantes_id');
        $solicitud->bl_libras_id = $request->post('bl_libras_id');
        $solicitud->bl_especialistas_id = $request->post('bl_especialistas_id');
        

        $solicitud->save(); 

      
  

        
        
        
        //$especialista->telefonos()->attach('bl_telefonos_id->id',['bl_especialistas_id'=>'bl_especialistas_id']);

        
        
        
//$espe= Especialista();
//dd($espe)->telefonos()->attach('id',['bl_especialistas_id'=>'id']);
        

        return redirect()->route("especialista.index")->with("success", "¡Registro agregado exitosamente!");
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function show($id)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $especialista = Especialista::find($id);
        $cargo = Cargo::all();
        $gerencia = Gerencia::all();
        $ubicacion_fisica = Ubicacion_Fisica::all();
        $direccion = Direccion::all();
        $telefono = Telefono::all();
        
        return view("admin.Solicitudes.delete", compact('especialista', 'telefono', 'cargo', 'gerencia', 'ubicacion_fisica', 'direccion'));
    }


    public function more($id)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $especialista = Especialista::find($id);
        $cargo = Cargo::all();
        $gerencia = Gerencia::all();
        $ubicacion_fisica = Ubicacion_Fisica::all();
        $direccion = Direccion::all();
        $telefono = Telefono::all();
        
        return view("admin.Solicitudes.more", compact('especialista', 'telefono', 'cargo', 'gerencia', 'ubicacion_fisica', 'direccion'));
    }



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function edit($id)
    {
        //$ubicacion_fisica = Gerencia::all();
        
        $especialista = Especialista::find($id);
        $cargo = Cargo::all();
        $gerencia = Gerencia::all();
        $ubicacion_fisica = Ubicacion_Fisica::all();

        $direccion = Direccion::all();
        $telefono = Telefono::all();

        return view("admin.Solicitudes.edit", compact('especialista', 'direccion', 'telefono', 'cargo', 'gerencia', 'ubicacion_fisica'));
        
    }
    
   
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function update(Request $request, $id)
    {
        //$ubicacion_fisica = Ubicacion_Fisica::all();

        $especialista = Especialista::find($id);
        $telefono = new Telefono();
        $direccion = new Direccion();
        

        $telefono->operadora = $request->post('operadora');
        $telefono->numero = $request->post('numero');
        $telefono->save();

        $direccion->descripcion = $request->post('descripcion');
        $direccion->save();

        $especialista->nombres = $request->post('nombres');
        $especialista->apellidos = $request->post('apellidos');
        $especialista->cedula = $request->post('cedula');
        $especialista->fech_nacimiento = $request->post('fech_nacimiento');
        $especialista->nm_ct = $request->post('nm_ct');
        $especialista->fecha_ing = $request->post('fecha_ing');
        $especialista->fecha_ing_dpto = $request->post('fecha_ing_dpto');
        $especialista->email = $request->post('email');
        $especialista->bl_cargos_id = $request->post('bl_cargos_id');
        $especialista->bl_gerencias_id = $request->post('bl_gerencias_id');
        $especialista->bl_ubicaciones_fisicas_id = $request->post('bl_ubicaciones_fisicas_id');
        $especialista->bl_telefonos_id = $telefono->id;
        $especialista->bl_direcciones_id = $direccion->id;
        

        $especialista->save(); 
        
        
        return redirect()->route("especialista.index")->with("success", "¡Actualización realizada exitosamente!");
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
