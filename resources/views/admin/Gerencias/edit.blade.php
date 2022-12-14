@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Módulo de Gerencia</h1>
@stop

@section('content')
    <p>Bienvenido</p>

  <!--@php
      print_r($gerencia);
  @endphp  -->


    <form class="row g-3" action="{{route('gerencia.update', $gerencia->id)}}" method="POST">
        @csrf
        @method("PUT")
  <div class="col-md-3">
    <label for="gerencia" class="form-label">Gerencia</label>
    <input name="gerencia" type="text" class="form-control" id="gerencia" placeholder="Escribe solo el nombre de gerencia" required value="{{$gerencia->gerencia}}">
  </div>

  
  <select class="form-select form-select-sm" name="vicepresidencia" id="vicepresidencia" required>
    <option value="{{$gerencia->vicepresidencia}}" selected>{{$gerencia->vicepresidencia}}</option>
    <option value="Servicios">Servicios</option>
    <option value="Procesos y Tecnología">Procesos y Tecnología</option>
    <option value="Negocios">Negocios</option>
    <option value="Tesorería y Finanzas">Tesorería y Finanzas</option>
    <option value="Junta Directiva">Junta Directiva</option>
    <option value="Presidencia">Presidencia</option>
    <option value="Administración">Administración</option>
    <option value="Infraestructura">Infraestructura</option>
  </select>
    
    <div class="col-md-3">
        <label for="floatingTextarea2">Descripción</label>
        <input name="descripcion" type="text" class="form-control" id="descripcion" placeholder="Escribe" required value="{{$gerencia->descripcion}}">
    </div>
  <div class="col-12">
    <a href="{{route('gerencia.index')}}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
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
