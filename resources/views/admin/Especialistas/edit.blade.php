@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Módulo de Especialistas</h1>
@stop

@section('content')
    <p>Bienvenido</p>


    <form class="row g-3" action="{{route('especialista.update', $especialista->id)}}" method="POST">
        @csrf
        @method("PUT")

        <div class="col-md-4">
          <label for="nombres" class="form-label">Nombres</label>
          <input name="nombres" type="text" class="form-control" id="nombres" placeholder="Escribe uno o dos nombres" required value="{{$especialista->nombres}}">
        </div>
      
        <div class="col-md-4">
          <label for="apellidos" class="form-label">Apellidos</label>
          <input name="apellidos" type="text" class="form-control" id="apellidos" placeholder="Escribe uno o dos nombres" required value="{{$especialista->apellidos}}">
        </div>
      
        <div class="col-md-2">
          <label for="cedula" class="form-label">Cédula de Identidad</label>
          <input name="cedula" type="text" class="form-control" id="cedula" placeholder="Escribe solo correos corporativos" required value="{{$especialista->cedula}}">
        </div>
      
      
      
        <div class="col-md-2">
          <label for="fech_nacimiento" class="form-label">Fecha de Nacimiento</label>
          <input name="fech_nacimiento" type="date" class="form-control" id="fech_nacimiento" placeholder="Escribe uno o dos nombres" required value="{{$especialista->fech_nacimiento}}">
        </div>
        <div class="col-md-3">
          <label for="nm_ct" class="form-label">NM o CT de usuario</label>
          <input name="nm_ct" type="text" class="form-control" id="nm_ct" placeholder="Escribe el primer apellido" required value="{{$especialista->nm_ct}}">
        </div>
        <div class="col-md-3">
          <label for="fec_ing" class="form-label">Fecha Ingreso Institución</label>
          <input name="fec_ing" type="date" class="form-control" id="fec_ing" placeholder="Escribe solo correos corporativos" required value="{{$especialista->fec_ing}}">
        </div>
      
        <div class="col-md-3">
          <label for="fec_ing_dpto" class="form-label">Fecha Ingreso al Departamento</label>
          <input name="fec_ing_dpto" type="date" class="form-control" id="fec_ing_dpto" placeholder="Escribe uno o dos nombres" required value="{{$especialista->fec_ing_dpto}}">
        </div>
          
        <div class="col-md-3">
          <label for="email" class="form-label">Correo Corporativo</label>
          <input name="email" type="text" class="form-control" id="email" placeholder="Escribe solo correos corporativos" required value="{{$especialista->email}}">
        </div>
     
        




      
        <div class="col-md-4">
          <label for="bl_cargos_id" class="form-label">Cargo:</label>
          <select class="form-select" aria-label="Default select example" name="bl_cargos_id" id="bl_cargos_id" value="{{$cargo->nombre}}">
        
            @foreach ($cargo as $carg)
            <option value="{{$carg->id}}">{{$carg->nombre}}</option>
            @endforeach 
            
          </select>
        </div>
        
        <div class="col-md-4">
          <label for="bl_gerencias_id" class="form-label">Gerencia:</label>
          <select class="form-select" aria-label="Default select example" name="bl_gerencias_id" id="bl_gerencias_id" value="{{$gerencia->gerencia}}">
        
            @foreach ($gerencia as $geren)
            <option value="{{$geren->id}}">{{$geren->gerencia}}</option>
            @endforeach 
            
          </select>
        </div>
        
        <div class="col-md-5">
          <label for="bl_ubicaciones_fisicas_id" class="form-label">Ubicación Física:</label>
          <select class="form-select" aria-label="Default select example" name="bl_ubicaciones_fisicas_id" id="bl_ubicaciones_fisicas_id" value="{{$ubicacion->ubicacion_fisica}}">
        
            @foreach ($ubicacion_fisica as $ubi)
            <option value="{{$ubi->id}}">{{$ubi->ubicacion_fisica}}</option>
            @endforeach 
            
          </select>
        </div>
        
        
        <label for="operadora" class="form-label">Vicepresidencia</label>
          <select class="form-select form-select-sm col-md-3" name="operadora" id="operadora" aria-placeholder="Seleccione una Opción" required value="{{$telefono->operadora}}">
            <option value="" selected disabled>Seleccione una Operadora</option>
            <option value="0412">0412</option>
            <option value="0424">0424</option>
            <option value="0414">0414</option>
            <option value="0426">0426</option>
            <option value="0416">0416</option>
            <option value="0212">0212</option>
        
          </select>
        
          <div class="col-md-3">
            <label for="telefono" class="form-label">Número de Teléfono</label>
            <input name="telefono" type="text" class="form-control" id="telefono" placeholder="Escribe el primer apellido" required value="{{$telefono->telefono}}">
          </div>
        
        
          <div class="col-md-3">
            <label for="descripcion" class="form-label">Dirección</label>
            <input name="descripcion" type="text" class="form-control" id="descripcion" placeholder="Escribe el primer apellido" required value="{{$direccion->descripcion}}">
          </div>
  

          





        <div class="col-12">
          <a href="{{route('especialista.index')}}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
        </svg> Regresar</a>
      <button type="submit" class="btn btn-primary" style="margin-left: center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save2" viewBox="0 0 16 16">
        <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v4.5h2a.5.5 0 0 1 .354.854l-2.5 2.5a.5.5 0 0 1-.708 0l-2.5-2.5A.5.5 0 0 1 5.5 6.5h2V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
      </svg>Guardar</button>
    
  </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
