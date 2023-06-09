@extends('adminlte::page')

@section('title', 'Indicadores')

@section('content_header')
    <h1>Encabezado Pantalla de inventario</h1>
@stop


@section('content')
    
    <a href="inventario/create" class="btn btn-primary">Crear</a>
    <br>
    <p>Listado Inventarios.</p>
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Accciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventarios as $inventario)
            <tr>
                <td>{{ $inventario->id }}</td>
                <td>{{ $inventario->nombre }}</td>
                <td>
                    <form action="/inventario/{{$inventario->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="inventario/{{$inventario->id}}" class="btn btn-info"> Editar</a>
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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