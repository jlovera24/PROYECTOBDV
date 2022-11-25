@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Módulo de Solicitudes</h1>
@stop

@section('content')
    <p>Bienvenido</p>

    

  <form class="row g-2" action="{{route('solicitud.store')}}" method="POST">
        @csrf

  <div class="col-md-2">
    <label for="solicitud_id" class="form-label">ID Solicitud</label>
    <input name="solicitud_id" type="text" class="form-control" id="solicitud_id" placeholder="Escribe uno o dos nombres" required>
  </div>

 
 

  <div class="col-md-7">
    <label for="descripcion_solicitud" class="form-label">Descripción</label>
    <input name="descripcion_solicitud" type="text" class="form-control" id="descripcion_solicitud" placeholder="Escribe solo correos corporativos" required>
  </div>



  <div class="col-md-3">
    <label for="fecha_solicitud" class="form-label">Fecha</label>
    <input name="fecha_solicitud" type="date" class="form-control" id="fecha_solicitud" placeholder="Escribe uno o dos nombres" required>
  </div>

  <div class="col-md-12">
    <h5></h5>
  </div>
  <div class="col-md-12">
    <h5></h5>
  </div>
  <div class="col-md-12">
    <h5></h5>
  </div>

<div class="col-md-12">

  <h5>Anexar información en caso de Aplicar</h5>
</div>


  <div class="col-md-2">
    <label for="calidad_fecha_ini" class="form-label">Fecha Inicio Calidad</label>
    <input name="calidad_fecha_ini" type="date" class="form-control" id="calidad_fecha_ini" placeholder="Escribe uno o dos nombres" >
  </div>

  <div class="col-md-2">
    <label for="calidad_fecha_fin" class="form-label">Fecha Inicio Produccón</label>
    <input name="calidad_fecha_fin" type="date" class="form-control" id="calidad_fecha_fin" placeholder="Escribe uno o dos nombres" >
  </div>

  <div class="col-md-2">
    <label for="fecha_cierre" class="form-label">Fecha Cierre</label>
    <input name="fecha_cierre" type="date" class="form-control" id="fecha_cierre" placeholder="Escribe uno o dos nombres" >
  </div>

  <div class="col-md-2">
    <label for="porcentaje_avance" class="form-label">Porcentaje de Avance</label>
    <input name="porcentaje_avance" type="text" class="form-control" id="porcentaje_avance" placeholder="Escribe el primer apellido" >
  </div>

  


  <div class="col-md-2">
    <label for="crq_calidad" class="form-label">CRQ Calidad</label>
    <input name="crq_calidad" type="text" class="form-control" id="crq_calidad" placeholder="Escribe solo correos corporativos" >
  </div>

  <div class="col-md-2">
    <label for="crq_produccion" class="form-label">CRQ Producción</label>
    <input name="crq_produccion" type="text" class="form-control" id="crq_produccion" placeholder="Escribe solo correos corporativos" >
  </div>

  <div class="col-md-4">
  <label for="tipo_solicitud" class="form-label">Tipo de Solicitud</label>
  <select class="form-control" name="tipo_solicitud" id="tipo_solicitud" aria-placeholder="Seleccione una Opción" required>
    <option value="" selected disabled>Seleccione un tipo</option>
    <option value="Soporte">Soporte</option>
    <option value="Requerimiento">Requerimiento</option>
    <option value="Incidencia">Incidencia</option>
    <option value="Proyecto">Proyecto</option>
  </select>
</div>

<div class="col-md-4">
  <label for="tipo_soporte" class="form-label">Tipo de Soporte</label>
  <select class="form-control" name="tipo_soporte" id="tipo_soporte" aria-placeholder="Seleccione una Opción" required>
    <option value="" selected disabled>Seleccione un tipo de soporte</option>
    <option value="Funcional">Funcional</option>
    <option value="Técnico">Técnico</option>
    <option value="Prioridad">Prioridad</option>
  </select>
</div>

  <div class="col-md-4">
  <label for="estatus" class="form-label">Estatus</label>
  <select class="form-control" name="estatus" id="estatus" aria-placeholder="Seleccione una Opción" required>
    <option value="" selected disabled>Seleccione un Estatus</option>
    <option value="Por Iniciar">Por Iniciar</option>
    <option value="En Proceso">En Proceso</option>
    <option value="En Certificación">En Certificación</option>
    <option value="Suspendido">Suspendido</option>
    <option value="Anulado">Anulado</option>
    <option value="Cerrado">Cerrado</option>
  </select>
</div>

  <div class="col-md-4">
  <label for="normativo" class="form-label">¿Normativo?</label>
  <select class="form-control" name="normativo" id="normativo" aria-placeholder="Seleccione una Opción" required>
    <option value="" selected disabled>Seleccione</option>
    <option value="Sí">Sí</option>
    <option value="No">No</option>
  </select>
</div>

  <div class="col-md-4">
  <label for="prioridad" class="form-label">Prioridad</label>
  <select class="form-control" name="prioridad" id="prioridad" aria-placeholder="Seleccione una Opción" required>
    <option value="" selected disabled>Seleccione una prioridad</option>
    <option value="ALTA">ALTA</option>
    <option value="MEDIA">MEDIA</option>
    <option value="BAJA">BAJA</option>
  </select>
</div>

  
  <div class="col-md-2">
    <label for="bl_solicitantes_id" class="form-label">Solcitante:</label>
    <select class="form-control" aria-label="Default select example" name="bl_solicitantes_id" id="bl_solicitantes_id" required>
  
      @foreach ($solicitante as $soli)
      <option value="{{$soli->id}}">{{$soli->email}}</option>
      @endforeach 
      
    </select>
  </div>

    <div class="col-md-3">
      <label for="bl_especialistas_id" class="form-label">Especialista Responsable</label>
      <select class="form-control" aria-label="Default select example" name="bl_especialistas_id" id="bl_especialistas_id" required>
    
        @foreach ($especialista as $esp)
        <option value="{{$esp->id}}">{{$esp->email}}</option>
        @endforeach 
        
      </select>
    </div>

    <div class="col-md-3">
      <label for="bl_libras_id" class="form-label">Aplicación</label>
      <select class="form-control" aria-label="Default select example" name="bl_libras_id" id="bl_libras_id" required>
    
        @foreach ($libra as $li)
        <option value="{{$li->id}}">{{$li->nom_aplicacion}}</option>
        @endforeach 
        
      </select>
    </div>

  
  {{--
<div>
  <select class="form-select" aria-label="Default select example" name="bl_gerencias_id" id="bl_gerencias_id">

    @foreach ($gerencia as $item)
    <option value="{{$item->id}}">{{$item->gerencia}}</option>
    @endforeach 
    
  </select>
</div>
--}}
  
{{--
Botones Regresar y Guardar

--}}

  <div class="col-6">
    <a href="{{route('solicitud.index')}}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
      </svg> Regresar</a>



    <button type="submit" class="btn btn-primary" style="margin-left: center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save2" viewBox="0 0 16 16">
        <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v4.5h2a.5.5 0 0 1 .354.854l-2.5 2.5a.5.5 0 0 1-.708 0l-2.5-2.5A.5.5 0 0 1 5.5 6.5h2V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
      </svg> Guardar</button>
    
  </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
