@extends('adminlte::page')

@section('title', 'Cooordinacion')

@section('content_header')
    <h1>Gestionar coordinación</h1>
@stop


@section('content')
    
    <a href="coordinacion/create" class="btn btn-primary">Crear</a>
    <p>Listado de coordinaciones.</p>
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Accciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($coordinaciones as $coordinacion)
            <tr>
                <td>{{ $coordinacion->id }}</td>
                <td>{{ $coordinacion->nombre_coordinacion }}</td>
                <td>
                    <form action="/coordinacion/{{$coordinacion->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="coordinacion/{{$coordinacion->id}}" class="btn btn-info"> Editar</a>
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