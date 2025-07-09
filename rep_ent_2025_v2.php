<?php 
    require "conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte v2</title>
    <link rel="stylesheet" href="css/reporte-style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
     <body>

        <h1 >Reporte de  <span> Entrevistas 2025 - 2 </span></h1>
        <form action="" method="GET" class="container mx-auto  w-100" >
            <div class="row header2">
                <div class="form-group col-md-4">
                    <label>Del día</label>
                    <input  name="startdate" id="startdate" type="datetime-local" value="<?php if(isset($_GET['startdate'])) {echo $_GET['startdate'];} ?>" class="form-control" >
                    
                </div>
                <div class="form-group col-md-4" >
                    <label >Hasta el día</label>
                    <input name="enddate" id="enddate" type="datetime-local" value="<?php if(isset($_GET['enddate'])) {echo $_GET['enddate'];} ?>" class="form-control" >
                </div>
                <div class="form-group col-2">
                    <button class="btn btn-success" type="submit">Buscar</button>
                </div>
            </div>
            
        </form>


        <?php 


        if(isset($_GET['startdate'])&& isset($_GET['enddate']))
        {
            $start_date= $_GET['startdate'] ;
            $end_date= $_GET['enddate']; 

            $sql= "SELECT entrevistador, 
            COUNT(*) as Entrevistados
            FROM entrevista20251 
            WHERE fecha BETWEEN '$start_date' AND '$end_date'
            GROUP BY entrevistador
            ORDER BY entrevistador";

            //$query_run = mysqli_query($conexion, $sql);

           $result = $conexion->query($sql);
            if($result->rowCount()>0){
                $entrevistador= array();
                $entrevistados=array();
                
                while($row = $result->fetch()){
                    $entrevistador[] = $row["entrevistador"];
                    $entrevistados[] = $row["Entrevistados"];                  
                }
               
            }else{
                echo "<center>No se encontró ningún dato</center>";
                } 
        }
        ?>
      
        <?php 
        try{
            $sql2= "SELECT programa, 
            COUNT(*) as Cantidad
            FROM entrevista20251
            where fecha BETWEEN '2025-07-06 20:00:00' AND '2025-07-18 20:26:00'
            GROUP BY programa
            ORDER by programa" ;

            $result2 = $conexion->query($sql2);
                if($result2->rowCount()>0){
                    $programa= array();
                    $cantidad=array();
                    
                    while($row = $result2->fetch()){
                        $programa[] = $row["programa"];
                        $cantidad[] = $row["Cantidad"];                  
                    }
                    unset($result2);
                }else{
                    echo "<center>No se encontró ningún dato</center>";
                }
            }catch(PDOException $e){
                die("Error: Could not able to execute $sql2. " . $e->getMessage());
            }
            // unset($conexion);
        ?>

    
    <div class="container h-100%">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cantidad de entrevistas por Coordinadora</h5>
                        <canvas id="myChart" ></canvas>
                        <table>
                                <thead>
                                    <tr>
                                        <th scope="col">Nombres</th>
                                        <th scope="col">Cantidad entrevistados</th>
                                    </tr>
                                </thead>
                                <tbody id="cuerpo">
                                    <tr>
                                        <?php 
                                        if(isset($entrevistador) && isset($entrevistados))
                                        {
                                            $entrevistador;
                                            $entrevistados;  
                                        
                                        $paralelo = array_map(function ($a, $b) {
                                            return [$a, $b];
                                        }, $entrevistador, $entrevistados);

                                        foreach ($paralelo as $value)   
                                        {
                                            echo " 
                                            <tr>
                                                <td >$value[0]</td>
                                                <td >$value[1]</td>

                                            </tr>";
                                        }
                                        }else{
                                            echo "<center>No se encontró ningún dato</center>";
                                        }
                                        

                                         ?>
                                    </tr>       
                                </tbody>
                        </table> 
                    </div>
              </div>
            </div>
            

            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Entrevistados por Especialidad</h5>
                    <canvas id="myChart2" ></canvas>
                </div>
                </div>
            </div>
            
        </div>   
    </div>



<script src="./js/pie.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

        <script>
        
        const entrevistador = <?php echo json_encode($entrevistador); ?>;
        const entrevistados = <?php echo json_encode($entrevistados); ?>
        
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: entrevistador,
            datasets: [{
                maxBarThickness: 29,
                label: 'Cantidad de Entrevistados',
                data: entrevistados,
                backgroundColor: ['rgb(147, 241, 143)',
                    'rgb(7, 60, 206)',
                    'rgb(228, 125, 148)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(241, 111, 4)',
                    'rgb(54, 81, 231)',
                    'rgb(248, 0, 248)'],
                borderColor: ['white'],
                borderWidth: 1
            }]
            },
            options: {
            scales: {
               y: { // defining min and max so hiding the dataset does not change scale range
                    min: 0,
                }
            }
            }
        });


        
        const programa = <?php echo json_encode($programa); ?>;
        const cantidad = <?php echo json_encode($cantidad); ?>;

        //datos para el el segundo gráfico
        const data2 = {
                labels: ['M. Nutrición','M. Enfemería', 'SEE Diabetes','SEE Emergencias','SEE Inmunizaciones','SEE CQ','SEE UCI','SEE UCI Neo','SEE UCI Ped.', 'SEE RPA', 'SEE Gineco','SEE N&N','SEE Oncología'],
                datasets: [{
                    label: 'Cantidad',
                    data: cantidad,
                    backgroundColor: [
                    'rgb(252, 100, 133)',
                    'rgb(189, 255, 113)',
                    'rgb(146, 146, 146)',
                    'rgb(255, 208, 0)',
                    'rgb(137, 255, 229)',
                    'rgb(92, 116, 76)',
                    'rgb(7, 60, 206)',
                    'rgb(228, 125, 148)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(241, 111, 4)',
                    'rgb(54, 81, 231)',
                    'rgb(248, 0, 248)'

                    ],
                    hoverOffset: 4
                }]
                };

        // Configuración para el segundo gráfico
          
        const config2 = {
            type: 'pie',
            data: data2,
           options : {
                plugins: {
                    datalabels: {
                    formatter: (value, myChart) => {
                        let sum = 0;
                        let dataArr = myChart.chart.data.datasets[0].data;
                        dataArr.map(data => {
                        sum += data;
                        });
                        let percentage = (value*100 / sum).toFixed(0)+"%";
                        return percentage;
                    },
                    color: '#00000',
                    anchor: 'end',
                    align: 'start',
                    clamp: 'true',
                    display: 'true',
                    font: {
                        size: 12,
                        weight: 800,
                        
                    }
                    }
                }
            },
            plugins: [ChartDataLabels]
        };
        const myChart2 = new Chart(
            document.getElementById('myChart2'),
            config2
         );   
         myChart2.canvas.parentNode.style.height = '600px';
myChart2.canvas.parentNode.style.width = '600px';   
         
        </script>

  </body>
</html>