@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Módulo de Solicitudes</h1>
@stop

@section('content')
    <p>Bienvenido</p>
   

    <p>
      <a href="{{route("solicitud.create") }}" class="btn btn-primary"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
          <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
          <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
        </svg> Agregar nuevo Especialista</a>
    </p>

        
    
 

    <div class="row">
      <div class="col-sm-12">
        @if ($mensaje = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{$mensaje}}
          </div> 
        @endif

   <!-- <div class="row">
      <div class="col-sm-12">
        @if ($eliminado = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{$eliminado}}
          </div> 
        @endif   --> 
      
  

    </div>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nombres</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Idenficador NM o CT</th>
          <th scope="col">Correo Corporativo</th>       
          <th scope="col">Cargo</th>
          <th scope="col">Gerencia</th>
          <th scope="col-2">Visualizar</th>
          <th scope="col-2">Modificar</th> 
          <th scope="col-2">Eliminar</th>


        </tr>
      </thead>
      <tbody>


      @foreach ($solicitud as $item)
      
   
        <tr>
        <!--  <th scope="row">1</th>  -->
          <td>{{$item->solicitud_id}}</td>
          <td>{{$item->tipo_solicitud}}</td>
          <td>{{$item->descripcion_solicitud}}</td>
          <td>{{$item->fecha_solicitud}}</td>
          <td>{{$item->calidad_fecha_ini}}</td>
          <td>{{$item->calidad_fecha_fin}}</td>
          <td>{{$item->fecha_cierre}}</td>
          <td>{{$item->porcentaje_avance}}</td>
          <td>{{$item->estatus}}</td>
          <td>{{$item->crq_calidad}}</td>
          <td>{{$item->crq_produccion}}</td>
          <td>{{$item->tipo_soporte}}</td>
          <td>{{$item->prioridad}}</td>
          <td>{{$item->prioridad}}</td>

      

          @foreach ($solicitante as $sol)
          @if ($item->bl_solicitantes_id == $sol->id)
          <td>{{$sol->nombre}}</td>
          @endif
          @endforeach
          @foreach ($solicitante as $sol)
          @if ($item->bl_solicitantes_id == $sol->id)
          <td>{{$sol->apellido}}</td>
          @endif
          @endforeach


      @foreach ($libra as $li)
          @if ($item->bl_libras_id == $li->id)
          <td>{{$li->nom_aplicacion}}</td>
          @endif
      @endforeach


      @foreach ($especialista as $esp)
          @if ($item->bl_especialistas_id == $esp->id)
          <td>{{$esp->nombres}}</td>
          @endif
      @endforeach
      @foreach ($especialista as $esp)
          @if ($item->bl_especialistas_id == $esp->id)
          <td>{{$esp->apellidos}}</td>
          @endif
      @endforeach




          {{--
          @foreach ($telefono as $telf)
            @if ($item->bl_telefonos_id == $telf->id)
            <td>{{$telf->operadora}}</td>
            @endif
          @endforeach     

          @foreach ($telefono as $telf)
              @if ($item->bl_telefonos_id == $telf->id)
              <td>{{$telf->numero}}</td>
              @endif
          @endforeach

          @foreach ($direccion as $dir)
              @if ($item->id == $dir->bl_especialistas_id)
              <td>{{$dir->descripcion}}</td>
              @endif
          @endforeach
 --}}


          <td>
            <form action="{{route("solicitud.more", $item->id)}}" method="GET">
              <button class="btn btn-info">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg>
              </button>
            </form>

          </td>


          <td>
            <form action="{{route("solicitud.edit", $item->id)}}" method="GET">
              <button class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
              </button>
            </form>      
          </td>


          <td>
            <form action="{{route("solicitud.show", $item->id)}}" method="GET">
              <button class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg>
              </button>
            </form>

          </td>

          


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
