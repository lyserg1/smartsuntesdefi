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


    <p></p>

    <table class="table table-dark table-striped">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Temperatura</th>
                <th scope="col">Humedad</th>
                <th scope="col">Region</th>
                <th scope="col">Comuna</th>
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
                {{-- <td>{{$clima->postes->direccion}}</td> --}}
                <td>{{$clima->postes->region}}</td>
                <td>{{$clima->postes->comuna}}</td>
                <td>{{$clima->created_at}}</td>
                <td>

                    <form action="{{route('clima.destroy', $clima)}}" method="POST">
                    {{-- <a href="{{ route('poste.edit', $poste) }}" class="btn btn-primary">Editar</a> --}}
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-info">Eliminar</button>
                    </form>

                </td>
            </tr>
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
