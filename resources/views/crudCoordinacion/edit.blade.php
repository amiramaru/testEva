
@extends('adminlte::page')

@section('title', 'Coordinación')

@section('content_header')
    <h1>Edición de coordinación</h1>
@stop


@section('content')
<!--<h2>Crear registros</h2>-->
<form action="/coordinacion/{{$coordinacion->id}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input class="form-control" id="nombre" name="nombre" type="text" value="{{$coordinacion->nombre_coordinacion}}">
  </div>
  
  
  <a href="/coordinacion" class="btn btn-secundary" tabindex="5">Cancelar</a>
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

