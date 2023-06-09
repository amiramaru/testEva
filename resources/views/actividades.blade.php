@extends('adminlte::page')

@section('title', 'Consultores')

@section('content_header')
    <h1>Gestionar Consultores</h1>
@stop


@section('content')
    
    <!-- <a href="actividades/create" class="btn btn-primary">Crear</a> -->
    <p>Seleccione al menos un consultor y presione el boton Relatorio.</p>
    <table id="tablaRelatorio" class="table table table-striped mt-4">
        <thead>
            <tr>
                <th></th>
                <th scope="col">Usuario</th>
                <th scope="col">Nombre</th>
                <!-- <th scope="col">Accciones</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($actividades as $actividad)
            <tr>
                <td></td>
                <td>{{ $actividad->co_usuario }}</td>
                <td>{{ $actividad->no_usuario }}</td>
                <!-- <td>
                    <form action="/actividades/{{$actividad->co_usuario}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="actividades/{{$actividad->co_usuario}}" class="btn btn-info"> Editar</a>
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                    
                </td> -->
            </tr>
            @endforeach
        </tbody>
        <a href="actividades/{{$actividad->co_usuario}}" class="btn btn-info"> Relatorio</a>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="vendor/datatables/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="vendor/datatables/css/select.bootstrap.css">
@stop

@section('js')
<script src="vendor/datatables/js/jquery-3.5.1.js"></script>
<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/js/dataTables.select.js"></script>
    <script> 
            /*Swal.fire(
                'Good job!',
                'You clicked the button!',
                'success'
                )*/
                $(document).ready(function(){
                    $("#tablaRelatorio").dataTable({
                        columnDefs: [ {
                            orderable: false,
                            className: 'select-checkbox',
                            targets:   0
                        } ],
                    select: {
                        style:    'os,multi',
                        selector: 'td:first-child'
                    },
                    language:{
                        select:{
                            rows:{
                                _:"Ud. seleccionó %d filas",
                                0:"Haga click en una fila para seleccionarla.",
                                1:"Solo 1 fila seleccionada"
                            }
                        }
                    }
                    })

                })
     </script>
@stop