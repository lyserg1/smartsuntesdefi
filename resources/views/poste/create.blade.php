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

    <form action={{ route('poste.store') }} method="GET">
        @csrf
        <div class="md-4">
            <label for="" class="form-label">Dirección</label>
            <input id="direccion" name="direccion" type="text" class="form-control" tabindex="1">

            <br>




        </div>


        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" aria-label="Default select example">
            <option selected>Selecciona la Región</option>
            <option name="region" value="Coquimbo">Coquimbo</option>
        </select>

        <br>
        <br>

        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" aria-label="Default select example">
            <option selected>Selecciona la Comuna</option>
            <option id="comuna" name="comuna" value="Choapa">Choapa</option>
            <option id="comuna" name="comuna" value="Elqui">Elqui</option>
            <option id="comuna" name="comuna" value="Limari">Limari</option>
            <option id="comuna" name="comuna" value="Canela">Canela</option>
            <option id="comuna" name="comuna" value="Illapel">Illapel</option>
            <option id="comuna" name="comuna" value="Los Vilos">Los Vilos</option>
            <option id="comuna" name="comuna" value="Salamanca">Salamanca</option>
            <option id="comuna" name="comuna" value="Andacollo">Andacollo</option>
            <option id="comuna" name="comuna" value="Coquimbo">Coquimbo</option>
            <option id="comuna" name="comuna" value="La Higuera">La Higuera</option>
            <option id="comuna" name="comuna" value="La Serena">La Serena</option>
            <option id="comuna" name="comuna" value="Paihuano">Paihuano</option>
            <option id="comuna" name="comuna" value="Vicuña">Vicuña</option>
            <option id="comuna" name="comuna" value="Combarbala">Combarbala</option>
            <option id="comuna" name="comuna" value="Monte Patria">Monte Patria</option>
            <option id="comuna" name="comuna" value="Ovalle">Ovalle</option>
            <option id="comuna" name="comuna" value="Punitaqui">Punitaqui</option>
            <option id="comuna" name="comuna" value="Rio Hurtado">Rio Hurtado</option>


        </select>

        <br>
        <br>

        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" aria-label="Default select example">
            <option selected>Selecciona el Estado</option>
            <option name="estado" value="Activo">Activo</option>
            <option name="estado" value="Inactivo">Inactivo</option>
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
