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
            esten registrados y tambien la posibilidad de eliminarlos </p>

        </div>

        <img src="https://s2.abcstatics.com/media/familia/2019/04/24/ruido-k8LG--620x349@abc.jpg" class="rounded mx-auto d-block" alt="...">



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
                <th scope="col">Dirección</th>
                <th scope="col">Fecha de Registro</th>
                <th scope="col">Acción</th>
            </tr>


        </thead>

        <tbody>
            @foreach ($ruidos as $ruido)
            <tr>
                <th scope="row">{{$ruido->id}}</th>
                <td>{{$ruido->cantidad}}</td>
                <td>{{$ruido->descripcion}}</td>
                <td>{{$ruido->postes->region}}</td>
                <td>{{$ruido->postes->comuna}}</td>
                <td>{{$ruido->postes->direccion}}</td>
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

    {{-- <div class="d-flex justify-content-end">
        {!! $ruidos->links() !!}

    </div> --}}

@endsection





@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
