
@extends('adminlte::page')

@section('title', 'Actividad')

@section('content_header')
    <h1>Registro de actividad</h1>
@stop


@section('content')
<!--<h2>Crear registros</h2>-->
<form action="/actividades/store" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input class="form-control" id="nombre" name="nombre" type="text">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción de la actividad</label>
    <textarea class="form-control" name="descripcion" id="descripcion" rows="4"></textarea>
  </div>
  
  <a href="/actividades" class="btn btn-secundary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
            /*Swal.fire(
                'Good job!',
                'You clicked the button!',
                'success'
                )*/
     </script>
@stop

