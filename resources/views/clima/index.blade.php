@include('layouts.navheader2')


@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Climas</h1>
@stop

@section('content')
    <p>Registros de Temperatura y Humedad.</p>


    <div class="card text-center">

        <div class="card-body">
          <h5 class="card-title">Datos de Climas</h5>
          <p class="card-text">En esta interfaz podras acceder a visualizar y analizar los datos climaticos de Temperatura y Humedad.</p>
          <a href="#" class="btn btn-primary">Ir a Registros</a>
        </div>

    </div>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
