@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Módulo de Gerencia</h1>
@stop

@section('content')
    <p>Bienvenido</p>

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Gerencia</th>
          <th scope="col">Gerencia de Línea</th>
          <th scope="col">Descripción</th>
          <th scope="col">Fecha de actualización</th>
        </tr>
      </thead>
      <tbody>

      @foreach ($gerencia as $item)
   
        <tr>
        <!--  <th scope="row">1</th>  -->
          <th>{{$item->id}}</th>
          <td>{{$item->gerencia}}</td>
          <td>{{$item->gerencia_linea}}</td>
          <td>{{$item->descripcion}}</td>
          <td>{{$item->updated_at}}</td>
        </tr>

      @endforeach
      </tbody>
    </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
