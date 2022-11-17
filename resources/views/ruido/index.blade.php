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
          <h5 class="card-title">Datos de Ruidos</h5>
          <p class="card-text">En esta interfaz podras acceder a visualizar y analizar los datos de Ruidos obtenidos desde nuestro poste inteligente.</p>
          {{-- <a href="#" class="btn btn-primary">Ir a Registros</a> --}}

        </div>

        <img src="https://www.mentesliberadas.com/wp-content/uploads/2015/01/ruido-1.jpghttps://www.mentesliberadas.com/wp-content/uploads/2015/01/ruido-1.jpg" class="rounded mx-auto d-block" alt="...">



    </div>

    <br>


    <p></p>

    <table class="table table-dark table-striped">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Region</th>
                <th scope="col">Comuna</th>
                <th scope="col">Fecha de Registro</th>
                <th scope="col">Acción</th>
            </tr>


        </thead>

        <tbody>
            @foreach ($ruidos as $ruido)
            <tr>
                <th scope="row">{{$ruido->id}}</th>
                <td>{{$ruido->cantidad}}</td>
                {{-- <td>{{$Ruido->postes->direccion}}</td> --}}
                <td>{{$ruido->postes->region}}</td>
                <td>{{$ruido->postes->comuna}}</td>
                <td>{{$ruido->created_at}}</td>
                <td>


                    {{-- <a href="{{ route('poste.edit', $poste) }}" class="btn btn-primary">Editar</a> --}}



                    <a href="" class="btn btn-danger" data-target="#deleteRuido-{{ $ruido->id }}" data-toggle="modal">Eliminar</a>


                </td>
            </tr>
            @include('ruido.modalruido')
            @endforeach
        </tbody>

    </table>

    <div class="d-flex justify-content-end">
        {!! $ruidos->links() !!}

    </div>


@endsection





@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
