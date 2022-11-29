@include('layouts.navheader2')


@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ruidos</h1>
@stop

@section('content')
    <p>Registros de Ruido.</p>


    <div class="card text-center">

        <div class="card-body">
          <h5 class="card-title">Datos de Ruido</h5>
          <p class="card-text">En esta interfaz entenderas como funciona y analizar los datos de decibeles capturados por los ruidos obtenidos desde nuestro poste inteligente.</p>
          {{-- <a href="#" class="btn btn-primary">Ir a Registros</a> --}}

          <br>
          <br>
          <p class="card-text">Una vez que registras un poste en este se veran los datos de ruido que se han capturado a traves de nuestro poste inteligente</p>

          <br>

          <p class="card-text"> La opcion de poder verificar que el poste este registrado, te permite acceder a un boton el cual te permitira la posibilidad de ver que datos de Ruido
            esten registrados y tambien la posibilidad de eliminarlos. </p>

            <br>
            <p> Puede seleccionar el poste que hayas registrado, y dar click en administrar de acuerdo a los ruidos capturados que desees verificar</p>

        </div>

        <img src="https://s2.abcstatics.com/media/familia/2019/04/24/ruido-k8LG--620x349@abc.jpg" class="rounded mx-auto d-block" alt="...">



    </div>

    <br>



@endsection





@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
