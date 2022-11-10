@include('layouts.navheader2')

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Luz</h1>
@stop

@section('content')
    <p>Bienvenido aqui podras aumentar y disminuir la Luz.</p>

    <div class="card text-center">



        <img src="https://i.blogs.es/891f82/portada/450_1000.webp" class="rounded mx-auto d-block" alt="...">



    </div>


    <label for="customRange1" class="form-label">Regulador de Luz</label>
    <input type="range" class="form-range" id="customRange1">


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
