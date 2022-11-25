@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Módulo de Equipos</h1>
@stop

@section('content')
    <p>Bienvenido</p>

    <div class="alert alert-warning" role="alert">¿Está seguro de eliminar el siguiente registro?</div>

    <table class="table table-hover !important">
      <thead>
        <tr>
          <th scope="col">Tipo de Equipo</th>
          <th scope="col">Estatus</th>
          <th scope="col">Ubicación</th>
          <th scope="col">Serial</th>
          <th scope="col">Nombres Especialista</th>
          <th scope="col">Apellidos Especialista</th>
        </tr>
      </thead>
      <tbody>

        <tr>
        <!--  <th scope="row">1</th>  -->
        <td>{{$solicitante->tipo_equipo}}</td>
        <td>{{$solicitante->estatus}}</td>
        <td>{{$solicitante->ubicacion}}</td>
        <td>{{$solicitante->serial}}</td>
        <td>{{$solicitante->bl_gerencias_id}}</td>
        
        @foreach ($especialista as $esp)
              @if ($item->bl_especialistas_id == $especialista->id)
              <td>{{$especialista->nombres}}</td>
              @endif
          @endforeach


        @foreach ($especialista as $esp)
              @if ($item->bl_especialistas_id == $especialista->id)
              <td>{{$especialista->apellidos}}</td>
              @endif
          @endforeach
        </tr>

        <td>{{$solicitante->updated_at}}</td>
      
      </tbody>
    </table>

    
      

      <form action="{{route('equipo.destroy', $equipo->id)}}" method="POST">
      @csrf
      @method('DELETE')
        <button class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
        </svg> Eliminar
        </button>
      </form>  

      <a href="{{route('equipo.index')}}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
      </svg> Regresar</a>

    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
