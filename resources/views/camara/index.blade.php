@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Camaras</h1>
@stop

@section('content')
    <p>Registros de Camaras</p>

    <div class="card">
        <div class="card-header">
          Administra La Camara
        </div>
        <div class="card-body">
          <h5 class="card-title">Bienvenido Administrador - Sigue las instrucciones para poder utilizar la adminsitración de la camara</h5>

          <br><br>

          <center>
          <a href="https://www.youtube.com/watch?v=79tHrF6LPQI">Acceso a Monitoreo de Camara</a>

          </center>

          <br><br>

          <p class="card-text">A traves de este link podras acceder al Monitoreo de la camara, da click en el.</p>





        </div>
    </div>


    <table class="table table-dark table-striped">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Conteo</th>
                <th scope="col">Fecha de Registro</th>
            </tr>


        </thead>

        <tbody>
            @foreach ($camaras as $camara)
            <tr>
                <th scope="row">{{$camara->id}}</th>
                <td>{{$camara->name}}</td>
                <td>{{$camara->conteo}}</td>
                <td>{{$camara->created_at}}</td>
                {{-- <td>

                    <form action="{{route('clima.destroy', $clima)}}" method="POST">
                    <a href="{{ route('poste.edit', $poste) }}" class="btn btn-primary">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-info">Eliminar</button>
                    </form>

                </td> --}}
            </tr>
            @endforeach
        </tbody>

    </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
