
@extends('adminlte::page')

@section('title', 'Relatorio')

@section('content_header')
    <h1>Relatorio consultores</h1>
@stop


@section('content')
<!--<h2>Crear registros</h2>-->

<table id="tablaRelatorio1" class="table table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Usuario</th>
                <th scope="col">Receta Liquida</th>
                <th scope="col">Custo Fixo</th>
                <!-- <th scope="col">Accciones</th> -->
            </tr>
        </thead>
        <tbody>
        
            @foreach($actividades as $item)
            @foreach($salario as $item2)
       
            <tr>
                <td>{{ $item->co_usuario }}</td>
                <td>{{ $item->valor-(21*$item->valor/100) }}</td>
                <td>{{ $item2->brut_salario}}</td>
                
            </tr>
        @endforeach
            
            @endforeach
        </tbody>
        
    </table>
    <a href="/actividades" class="btn btn-primary" tabindex="5">Regresar</a>
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

