@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Camaras</h1>
@stop

@section('content')
    <p>Registros de Camaras</p>

    <div class="card">
        <div class="card-header">
          Administra La Camara
        </div>
        <div class="card-body">
          <h5 class="card-title">Bienvenido Administrador - Sigue las instrucciones para poder utilizar la adminsitración de la camara</h5>

          <br><br>

          <center>
          <a href="https://www.youtube.com/watch?v=79tHrF6LPQI">Acceso a Monitoreo de Camara</a>

          </center>

          <br><br>

          <p class="card-text">A traves de este link podras acceder al Monitoreo de la camara, da click en el.</p>
          <a href="#" class="btn btn-primary justify-center">Go somewhere</a>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
