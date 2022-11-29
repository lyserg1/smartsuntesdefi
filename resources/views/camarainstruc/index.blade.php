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
          <br>
          <center>
         {{--  <a href="https://www.youtube.com/watch?v=79tHrF6LPQI">Acceso a Monitoreo de Camara</a> --}}

         <p>Podras acceder a la camara por medio del programa que utilizamos para conectar con nuestro sistema, el cual envia los datos a nuestra base de datos
            la cual esta alojada en AWS.
         </p>

         <p> podras ver los datos captados por la camara integrada al poste, en la interfaz del poste en el boton que dice administrar</p>

          </center>

          <br><br>

          <p class="card-text">Nuestro poste inteligente captura la cantidades de personas que visualiza la camara, esta la muestra a traves del poste que tiene
            integrada nuestra camara.</p>



            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpE3VbvO1yWb-9a9GSJoJvmpoDCjtgL-ZAQhZFz0E5wIy2cJ0xFiPFWq9VaczZRFzvuQ&usqp=CAU" class="rounded mx-auto d-block" alt="...">


        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
