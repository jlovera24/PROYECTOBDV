@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Pantalla Principal</h1>
@stop

@section('content')
    <p>Bienvenido</p>

    <div class="col-md-12">
    <h5><hr></h5>
  </div>

    <h5>Justificación del Aplicativo Web</h5>

    <div class="col-md-12">
        <h5><hr></h5>
      </div>
      <div class="col-md-12">
        <cite style="text-align: center; font-size:17px;">El sitio web fue desarrollado con el propósito de cumplir con las actividades académicas, como lo es el 
          proyecto Socio-tecnológico requerido por la Universidad Experimental de la Gran Caracas - Francisco 
          de Miranda, y a su vez realizando un aporte a la comunidad, esto con el fin de fomentar el compromiso y 
          conceder beneficios para una Institución Pública como lo es Banco de Venezuela S.A. Banco Universal, 
          por consiguiente el desarrollo web se encuentra dedicado exclusivamente para los servidores públicos 
          que forman parte de dicha Institución.</cite>

        </div>

        <div class="col-md-12">
            <h5></h5>
          </div>
          <div class="col-md-12">
            <h5></h5>
          </div>
          
          <div class="col-md-12">
            <h5><hr></h5>
          </div>
          <div class="col-md-12">
            <center>
    <img src="vendor/adminlte/dist/img/proyecto.jpeg" float="center"  class="img-center" width="600px" height="260px" alt="principal" style="opacity:0.4">
</center>

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
