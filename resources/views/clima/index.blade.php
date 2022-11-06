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
          <p class="card-text">En esta interfaz podras acceder a visualizar y analizar los datos climaticos de Temperatura y Humedad obtenidos desde nuestro poste inteligente.</p>
          {{-- <a href="#" class="btn btn-primary">Ir a Registros</a> --}}

        </div>

        <img src="https://www.lifeder.com/wp-content/uploads/2021/10/clima-tipos-1024x423.jpg" class="rounded mx-auto d-block" alt="...">



    </div>

    <br>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>


@stop





@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
