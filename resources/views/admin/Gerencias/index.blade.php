@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Módulo de Gerencia</h1>
@stop

@section('content')
    <p>Bienvenido</p>

    <form class="row g-3" autocomplete="off">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Gerencia</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="Correo@banvenez.com">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Gerencia de Línea</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>

    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px; margin-top: 20px !important; margin-left: 10px; "></textarea>
        <label for="floatingTextarea2">Comments</label>
    </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" style="margin-top: 20px !important;">Sign in</button>
  </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
