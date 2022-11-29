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
          <h5 class="card-title">Administra los datos del clima registrados por poste</h5>
          <p class="card-text">En esta interfaz entenderas como funciona y analizar los datos climaticos de Temperatura y Humedad obtenidos desde nuestro poste inteligente.</p>
          {{-- <a href="#" class="btn btn-primary">Ir a Registros</a> --}}

          <br>
          <br>
          <p class="card-text">Una vez que registras un poste en este se veran los datos de temperatura y humedad que se han capturado a traves de nuestro poste inteligente</p>

          <br>



        </div>

        <img src="https://www.lifeder.com/wp-content/uploads/2021/10/clima-tipos-1024x423.jpg" class="rounded mx-auto d-block" alt="...">



    </div>

    <br>



@endsection





@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
