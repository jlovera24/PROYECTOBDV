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
        $especialista->telefonos()->attach($telefono->id);
        
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
        $direccion = Direccion::all();

        return view('admin.Especialistas.create', compact('especialista', 'cargo', 'gerencia', 'ubicacion_fisica', 'direccion'));
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function store(Request $request)
    {
        //$ubicacion_fisica = ubicacion_fisica::all();
        $especialista = new Especialista();
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
        
        return view("admin.Especialistas.delete", compact('especialista', 'telefono', 'cargo', 'gerencia', 'ubicacion_fisica', 'direccion'));
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
        
        return view("admin.Especialistas.more", compact('especialista', 'telefono', 'cargo', 'gerencia', 'ubicacion_fisica', 'direccion'));
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

        return view("admin.Especialistas.edit", compact('especialista', 'direccion', 'telefono', 'cargo', 'gerencia', 'ubicacion_fisica'));
        
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
