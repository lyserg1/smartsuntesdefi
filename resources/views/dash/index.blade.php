@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <center>
    <h1>Dashboard</h1>
    </center>
@stop

@section('content')

<div class="card text-bg-dark">
    <img src="https://cdn-images-1.listennotes.com/podcasts/objetivos-de-la-organización-administración-1-LRKhEonuV67-XUyeEFJiAgB.1400x1400.jpg" class="card-img" alt="...">
    <div class="card-img-overlay">
      <h5 class="card-title">Administración</h5>
      <p class="card-text">Bienvenido al Panel de Administracion aqui, podras encontrar las multiples alternativas para la administración del Poste
        Inteligente tales como Monitoreo de los registros Climaticos, Luz, Camaras, Ruidos, y Estadisticas.</p>

    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
