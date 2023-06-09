@extends('adminlte::page')

@section('title', 'Indicadores')

@section('content_header')
    <h1>Gráficas</h1>
@stop


@section('content')
    <!--<p>Contenido Seleccione una opción del menú lateral izquierdo.</p>-->
<br/>
<div class="row">
    <div class="col-4" style="width:300px; height: 200px;">
        <canvas id="myChart" style="position: relative; width: 100vh; height: 100vw;"></canvas>
    </div>

    <div class="col-4" style="width:300px; height: 200px;">
        <canvas id="myChart2" style="position: relative; width: 100vh; height: 100vw;"></canvas>
    </div>

   <!--  <div class="col-4" style="width:300px; height: 200px;">
        <canvas id="myChart3" style="position: relative; width: 100vh; height: 100vw;"></canvas>
    </div> -->
  </div>
  
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="botonModal" data-bs-toggle="modal" data-bs-target="#exampleModal" style="display: none;">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reporte</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 id="tituloTabla"></h2>
      <table id="example" class="display table table-striped" style="width:100%;">
          <thead>
                <tr>
                    <th>nombre</th>
                    <th>descripcion</th>
                    <th>nombre_coordinacion</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    
                </tr>
            </thead>
            
    </table>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

<!-------------------------------------------------Modal para carga de inventario--------------------------------------------------------->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="botonModal1" data-bs-toggle="modal" data-bs-target="#exampleModal1" style="display: none;">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reporte</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 id="tituloTabla1"></h2>
      
    <table id="example1" class="display table table-striped" style="width:100%;">
          <thead>
                <tr>
                    <th>nombre</th>
                    <th>descripcion</th>
                    <th>nombre_coordinacion</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    
                </tr>
            </thead>
            
    </table>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
<!----------------------------------------------------------------------------------------------------------------------------------------->

<!------------------------------------------------------------Modal de Indicadores---------------------------------------------------------->
 <!-- Button trigger modal -->
 <button type="button" class="btn btn-primary" id="botonModal2" data-bs-toggle="modal" data-bs-target="#exampleModal2" style="display: none;">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reporte</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 id="tituloTabla2"></h2>
      
    <table id="example2" class="display table table-striped" style="width:100%;">
          <thead>
                <tr>
                    <th>nombre_coordinacion</th>
                    <th>porcenta_avance</th>
                    <th>rango_min</th>
                    <th>rango_max</th>
                    <th>updated_at</th>
                    
                </tr>
            </thead>
            
    </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
<!------------------------------------------------------------------------------------------------------------------------------------------>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="vendor/chart.js/Chart.min.css">
    <link rel="stylesheet" href="vendor/datatables/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="vendor/datatables/css/select.bootstrap.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
    <style>
       
  
  .modal-dialog {
    width: 100%;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  
  .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  
  .modal-body {
    overflow-y: auto;
  }
 
  .btn-open-modal {
  margin-bottom: 0.5em;
}


      </style>
@stop

@section('js')
<!--<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>-->
<script src="vendor/chart.js/Chart.js"></script>
<script src="vendor/datatables/js/jquery-3.5.1.js"></script>
<script src="vendor/bootstrap.bundle.min.js"></script>
<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/js/dataTables.bootstrap5.min.js"></script>
<script src="vendor/datatables/js/dataTables.buttons.min.js"></script>
<script src="vendor/datatables/js/jszip.min.js"></script>
<script src="vendor/datatables/js/pdfmake.min.min.js"></script>
<script src="vendor/datatables/js/vfs_fonts.js"></script>
<script src="vendor/datatables/js/buttons.html5.min.js"></script>
<script src="vendor/datatables/js/buttons.print.min.js"></script>
<script src="vendor/datatables/js/dataTables.select.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->

    <script> 
            const ctx = document.getElementById('myChart');

    var myChart=new Chart(ctx, {
    type: 'bar',
    data: {
      //labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: 'Consultores',
        //data: [12, 19, 3, 5, 2, 3],
        backgroundColor: ['#6bf1ab','#63d69f', '#438c6c', '#509c7f', '#1f794e', '#34444c', '#90CAF9', '#64B5F6', '#42A5F5', '#2196F3', '#0D47A1'],
        borderColor: ['black'],
        borderWidth: 2
      }]
    },
    options: {
        maintainAspectRatio: false,
        // onClick: (e) => {
        //     ///const canvasPosition = Chart.helpers.getRelativePosition(e, chart);

        //     // Substitute the appropriate scale IDs
        //     //const dataX = chart.scales.x.getValueForPixel(canvasPosition.x);
        //     //const dataY = chart.scales.y.getValueForPixel(canvasPosition.y);
        //     console.log(e.chart.canvas.id);
        //     cargarModal(e.chart.canvas.id);
        //     //debugger;
        //     //document.querySelector('#botonModal').click();
            
        // },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  const ctx2 = document.getElementById('myChart2');
  const DATA_COUNT = 5;
  var myChart2=new Chart(ctx2, {
    type: 'pie',
    data: {
      //labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: 'Receita Liquida',
        backgroundColor: ['#6bf1ab','#63d69f', '#438c6c', '#509c7f', '#1f794e', '#34444c', '#90CAF9', '#64B5F6', '#42A5F5', '#2196F3', '#0D47A1'],
        //data: [12, 19, 3, 5, 2, 3],
        borderWidth: 2
      }]
    },
    options: {
        maintainAspectRatio: false,
        // onClick: (e) => {
        //     ///const canvasPosition = Chart.helpers.getRelativePosition(e, chart);

        //     // Substitute the appropriate scale IDs
        //     //const dataX = chart.scales.x.getValueForPixel(canvasPosition.x);
        //     //const dataY = chart.scales.y.getValueForPixel(canvasPosition.y);
        //     console.log(e.chart.canvas.id);
        //     cargarModal(e.chart.canvas.id);
        //     //debugger;
        //     document.querySelector('#botonModal1').click();
           
        // },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  const ctx3 = document.getElementById('myChart3');

  var myChart3=new Chart(ctx3, {
    type: 'bar',
    data: {
      //labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: 'Indicadores',
        //data: [12, 19, 3, 5, 2, 3],
        backgroundColor: ['#ff80ff','#ff66ff', '#ff4dff', '#ff33ff', '#ff1aff', '#ff00ff', '#e600e6', '#cc00cc', '#b300b3', '#990099', '#800080'],
        borderColor: ['black'],
        borderWidth: 2
      }]
    },
    options: {
        maintainAspectRatio: false,
        onClick: (e) => {
            ///const canvasPosition = Chart.helpers.getRelativePosition(e, chart);

            // Substitute the appropriate scale IDs
            //const dataX = chart.scales.x.getValueForPixel(canvasPosition.x);
            //const dataY = chart.scales.y.getValueForPixel(canvasPosition.y);
            console.log(e.chart.canvas.id);
            cargarModal(e.chart.canvas.id);
            //debugger;
            document.querySelector('#botonModal2').click();
            
        },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

//////////////////////////////////////Fechs para cargar las graficas con valores de base de datos.//////////////////////////////////////////
  let url = 'http://127.0.0.1:8000/api/actividades'
        fetch(url)
            .then( response => response.json() )
            .then( datos => mostrar(datos) )
            .catch( error => console.log(error) )


        const mostrar = (coordinaciones) =>{
          
          coordinaciones.forEach(element => {
                myChart.data['labels'].push(element.co_usuario)
                myChart.data['datasets'][0].data.push(element.brut_salario)
                myChart.update()
            });
            //console.log(myChart.data)
        } 

        let url2 = 'http://127.0.0.1:8000/api/indicadores'
        fetch(url2)
            .then( response => response.json() )
            .then( datos => mostrar2(datos) )
            .catch( error => console.log(error) )


        const mostrar2 = (inventarios) =>{
          inventarios.forEach(element => {
                myChart2.data['labels'].push(element.co_usuario)
                myChart2.data['datasets'][0].data.push(element.valor)
                myChart2.update()
            });
            //console.log(myChart2.data)
        } 

        let url3 = 'http://127.0.0.1:8000/api/indicadores'
        fetch(url3)
            .then( response => response.json() )
            .then( datos => mostrar3(datos) )
            .catch( error => console.log(error) )


        const mostrar3 = (indicadores) =>{
          indicadores.forEach(element => {
                myChart3.data['labels'].push(element.nombre_coordinacion)
                myChart3.data['datasets'][0].data.push(element.porcenta_avance)
                myChart3.update()
            });
            //console.log(myChart2.data)
        }
        /////////////////////////////////////////cargando la dataTable con data de la base de datos
       
        function cargarModal(chart){

          //debugger;
          
          document.getElementById("tituloTabla1").textContent='Tabla de Inventarios';
          if (chart=="myChart2") {
            $.ajax({
                url: "http://127.0.0.1:8000/api/inventarios",
                success : function(data) {
                  debugger;
                    var datos = data;//A la variable le asigno el json decodificado
                    $('#example1').dataTable( {
                        select: {
                          style:'multi'
                        },
                        dom: 'Bfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'print'
                        ],
                        data: datos,
                        columns:[
                        {data:'nombre'},
                        {data:'descripcion'},
                        {data:'nombre_coordinacion'},
                        {data:'created_at'},
                        {data:'updated_at'},
                      ]
                      
                    });
                }       
            });
          }else{
            
          document.getElementById("tituloTabla").textContent='Tabla de Actividades';
            if (chart=="myChart") {
              $.ajax({
                url: "http://127.0.0.1:8000/api/actividades",
                success : function(data) {
                  debugger;
                    var datos = data;//A la variable le asigno el json decodificado
                    $('#example').dataTable( {
                        dom: 'Bfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'print'
                        ],
                        data: datos,
                        columns:[
                        {data:'nombre'},
                        {data:'descripcion'},
                        {data:'nombre_coordinacion'},
                        {data:'created_at'},
                        {data:'updated_at'},
                      ]
                    });
                }       
            });
          }else{
            
          document.getElementById("tituloTabla2").textContent='Tabla de Indicadores';

            if (chart=="myChart3") {
              $.ajax({
                url: "http://127.0.0.1:8000/api/indicadores",
                success : function(data) {
                  debugger;
                    var datos = data;//A la variable le asigno el json decodificado
                    $('#example2').dataTable( {
                        dom: 'Bfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'print'
                        ],
                        data: datos,
                        columns:[
                        {data:'nombre_coordinacion'},
                        {data:'porcenta_avance'},
                        {data:'rango_min'},
                        {data:'rango_max'},
                        {data:'updated_at'},
                      ]
                    });
                }       
            });
            }
          }
          }

        }
     </script>
@stop