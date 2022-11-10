@include('layouts.navheader2')

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
 <center>
  <h1>Poste Inteligente</h1>
 </center>

@stop

@section('content')
    <h3>Registrar Poste Inteligente</h3>

     <!--Parece que por ejemplo si le pongo poste.create me lleva a esta misma vista, pero si no me dice que -->

    <form action={{ route('poste.store') }} method="POST">
        @csrf
        <div class="md-4">
            <label for="" class="form-label">Dirección</label>
            <input name="direccion" type="text" class="form-control" required autocomplete="direccion" autofocus tabindex="1">

            <br>




        </div>


        <select name="region" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required autocomplete="region" autofocus aria-label="Default select example">
            <option selected>Selecciona la Región</option>
            <option value="Coquimbo">Coquimbo</option>
        </select>

        <br>
        <br>

        <select name="comuna" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required autocomplete="comuna" autofocus aria-label="Default select example">
            <option selected>Selecciona la Comuna</option>
            <option value="Choapa">Choapa</option>
            <option value="Elqui">Elqui</option>
            <option value="Limari">Limari</option>
            <option value="Canela">Canela</option>
            <option value="Illapel">Illapel</option>
            <option value="Los Vilos">Los Vilos</option>
            <option value="Salamanca">Salamanca</option>
            <option value="Andacollo">Andacollo</option>
            <option value="Coquimbo">Coquimbo</option>
            <option value="La Higuera">La Higuera</option>
            <option value="La Serena">La Serena</option>
            <option value="Paihuano">Paihuano</option>
            <option value="Vicuña">Vicuña</option>
            <option value="Combarbala">Combarbala</option>
            <option value="Monte Patria">Monte Patria</option>
            <option value="Ovalle">Ovalle</option>
            <option value="Punitaqui">Punitaqui</option>
            <option value="Rio Hurtado">Rio Hurtado</option>


        </select>

        <br>
        <br>

        <select name="estado" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required autocomplete="estado" autofocus aria-label="Default select example">
            <option selected>Selecciona el Estado</option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select>


        <br>
        <br>

        <a href={{ route('poste.index') }} class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>



@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
