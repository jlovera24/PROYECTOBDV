@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Módulo de Especialistas</h1>
@stop

@section('content')
    <p>Bienvenido</p>

  

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nombres</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Cédula de Identidad</th>
          <th scope="col">Fecha de Nacimiento</th>       
          <th scope="col">NM o CT</th>
          <th scope="col">Gerencia</th>

          


        </tr>
      </thead>
      <tbody>

        <tr>
        <!--  <th scope="row">1</th>  -->
        <td>{{$especialista->nombres}}</td>
          <td>{{$especialista->apellidos}}</td>
          <td>{{$especialista->cedula}}</td>
          <td>{{$especialista->fech_nacimiento}}</td>
          <td>{{$especialista->nm_ct}}</td>
          

          @foreach ($gerencia as $geren)
          @if ($especialista->bl_gerencias_id == $geren->id)
          <td>{{$geren->gerencia}}</td>
          @endif
      @endforeach

         

          
        </tr>

      
      </tbody>
    </table>




    

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Fecha de Ingreso a BDV</th>
          <th scope="col">Fecha de Ingreso al área</th>
          <th scope="col">Correo Corporativo</th>      
          <th scope="col">Piso o Ubicación</th>

        </tr>
      </thead>
      <tbody>

        <tr>
        <!--  <th scope="row">1</th>  -->
        <td>{{$especialista->fecha_ing}}</td>
        <td>{{$especialista->fecha_ing_dpto}}</td>
        <td>{{$especialista->email}}</td>
          
        @foreach ($ubicacion_fisica as $ubi)
        @if ($especialista->bl_ubicaciones_fisicas_id == $ubi->id)
        <td>{{$ubi->piso}}</td>
        @endif
    @endforeach

        
        </tr>

      
      </tbody>
    </table>





    <table class="table">
      <thead>
        <tr>
          <th scope="col">Operadora</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Cargo</th>
          <th scope="col">Dirección</th>

        </tr>
      </thead>
      <tbody>

        <tr>
        <!--  <th scope="row">1</th>  -->
        

        @foreach ($telefono as $telf)
        @if ($especialista->bl_telefonos_id == $telf->id)
        <td>{{$telf->operadora}}</td>
        @endif
    @endforeach

    @foreach ($telefono as $telf)
        @if ($especialista->bl_telefonos_id == $telf->id)
        <td>{{$telf->numero}}</td>
        @endif
    @endforeach


          @foreach ($cargo as $carg)
          @if ($especialista->bl_cargos_id == $carg->id)
          <td>{{$carg->nombre}}</td>
          @endif
      @endforeach

      @foreach ($direccion as $dir)
          @if ($especialista->bl_direcciones_id == $dir->id)
          <td>{{$dir->descripcion}}</td>
          @endif
      @endforeach



        </tr>

      
      </tbody>
    </table>



      <a href="{{route('especialista.index')}}" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
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
