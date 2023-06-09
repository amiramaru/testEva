
@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Edición de inventario</h1>
@stop


@section('content')
<!--<h2>Crear registros</h2>-->
<form action="/inventario/{{$inventario->id}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input class="form-control" id="nombre" name="nombre" type="text" value="{{$inventario->nombre}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <textarea class="form-control" name="descripcion" id="descripcion" rows="4">{{$inventario->descripcion}}</textarea>
  </div>
  
  <a href="/inventario" class="btn btn-secundary" tabindex="5">Cancelar</a>
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

