@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Módulo de Solicitantes Funcionales</h1>
@stop

@section('content')
    <p>Bienvenido</p>

  <!--@php
      print_r($solicitante);
  @endphp  -->


    <form class="row g-3" action="{{route('solicitante.update', $solicitante->id)}}" method="POST">
        @csrf
        @method("PUT")

        <div class="col-md-3">
          <label for="nombres" class="form-label">Nombres</label>
          <input name="nombres" type="text" class="form-control" id="nombres" placeholder="Escribe uno o dos nombres" required value="{{$solicitante->nombres}}">
        </div>
        <div class="col-md-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input name="apellido" type="text" class="form-control" id="apellido" placeholder="Escribe el primer apellido" required value="{{$solicitante->apellido}}">
        </div>
        <div class="col-md-3">
          <label for="email" class="form-label">Correo Corporativo</label>
          <input name="email" type="text" class="form-control" id="email" placeholder="Escribe solo correos corporativos" required value="{{$solicitante->email}}">
        </div>
        <div>
          <select class="form-select" aria-label="Default select example" name="bl_gerencias_id" id="bl_gerencias_id">
        
            @foreach ($gerencia as $item)
            <option value="{{$item->id}}">{{$item->gerencia}}</option>
            @endforeach
            
          </select>
        </div>

        
        <div class="col-12">
          <a href="{{route('solicitante.index')}}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
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
