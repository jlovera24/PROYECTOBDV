@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Módulo de Gerencia</h1>
@stop

@section('content')
    <p>Bienvenido</p>

    <form class="row g-3">
  <div class="col-md-3">
    <label for="gerencia" class="form-label">Gerencia</label>
    <input name="gerencia" type="text" class="form-control" id="gerencia" placeholder="Escribe solo el nombre de gerencia" required>
  </div>
  <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Gerencia de línea</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  
    <div class="form-floating">
        <label for="floatingTextarea2">Observaciones</label>
        
        <textarea class="form-control" placeholder="Escribe una breve descripción de la gerencia" id="floatingTextarea2" style="height: 100px; margin-top: 20px !important; margin-left: 10px; "></textarea>
    </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" style="margin-left: center; margin-top: 20px !important;">Guardar</button>
  </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
