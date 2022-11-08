@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Poste Inteligente</h1>
@stop

@section('content')
    <p>Poste Inteligentes Registrados</p>


    <a href={{ route('poste.create') }} class="btn btn-primary">Registrar</a>

    <p></p>

    <table class="table table-dark table-striped">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Dirección</th>
                <th scope="col">Región</th>
                <th scope="col">Comuna</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha de Registro</th>
                <th scope="col">Fecha de Modificación</th>
                <th scope="col">Acción</th>
            </tr>


        </thead>

        <tbody>
            @foreach ($postes as $poste)
            <tr>
                <th scope="row">{{$poste->id}}</th>
                <td>{{$poste->direccion}}</td>
                <td>{{$poste->region}}</td>
                <td>{{$poste->comuna}}</td>
                <td>{{$poste->estado}}</td>
                <td>{{$poste->created_at}}</td>
                <td>{{$poste->updated_at}}</td>
                <td>

                    <form action="{{route('poste.destroy', $poste)}}" method="POST">
                    <a href="{{ route('poste.edit', $poste) }}" class="btn btn-primary">Editar</a>
                    @csrf
                    @method('DELETE')
                    {{-- <button type="submit" class="btn btn-info">Eliminar</button> --}}
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>

    </table>


@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
