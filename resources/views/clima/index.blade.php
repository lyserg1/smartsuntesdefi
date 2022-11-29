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
          <p class="card-text">En esta interfaz entenderas como funciona y analizar los datos climaticos de Temperatura y Humedad obtenidos desde nuestro poste inteligente.</p>
          {{-- <a href="#" class="btn btn-primary">Ir a Registros</a> --}}

          <br>
          <br>
          <p class="card-text">Una vez que registras un poste en este se veran los datos de temperatura y humedad que se han capturado a traves de nuestro poste inteligente</p>

          <br>

          <p class="card-text"> La opcion de poder verificar que el poste este registrado, te permite acceder a un boton el cual te permitira la posibilidad de ver que datos de Climas
            esten registrados y tambien la posibilidad en caso de eliminarlos </p>

        </div>

        <img src="https://www.lifeder.com/wp-content/uploads/2021/10/clima-tipos-1024x423.jpg" class="rounded mx-auto d-block" alt="...">



    </div>

    <br>

    <p></p>

    <table class="table table-dark table-striped">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Temperatura</th>
                <th scope="col">Humedad</th>
                <th scope="col">Region</th>
                <th scope="col">Comuna</th>
                <th scope="col">Dirección</th>
                <th scope="col">Fecha de Registro</th>
                <th scope="col">Acción</th>
            </tr>


        </thead>

        <tbody>
            @foreach ($climas as $clima)
            <tr>
                <th scope="row">{{$clima->id}}</th>
                <td>{{$clima->temperatura}}</td>
                <td>{{$clima->humedad}}</td>
                <td>{{$clima->postes->region}}</td>
                <td>{{$clima->postes->comuna}}</td>
                <td>{{$clima->postes->direccion}}</td>
                <td>{{$clima->created_at}}</td>
                <td>


                    {{-- <a href="{{ route('poste.edit', $poste) }}" class="btn btn-primary">Editar</a> --}}



                    <a href="" class="btn btn-danger" data-target="#deleteClima-{{ $clima->id }}" data-toggle="modal">Eliminar</a>


                </td>
            </tr>
            @include('clima.modalclima')
            @endforeach
        </tbody>

    </table>

    {{-- <div class="d-flex justify-content-end">
        {!! $climas->links() !!}

    </div> --}}


@endsection





@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
