<?php 
    require "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
        <link rel="stylesheet" href="./css/reporte-style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
     <body>

        <h1 >Reporte de Entrevista 2025 - 2</h1>
        <form action="" method="GET" class="container mx-auto  w-100" >
            <div class="row align-items-center">
                <div class="form-group col">
                    <input onchange="filterData()" name="startdate" id="startdate" type="datetime-local">
                </div>
                <div class="form-group col" >
                    <input onchange="filterData()" name="enddate" id="enddate" type="datetime-local" >
                </div>
                <div class="form-group col">
                    <button class="btn btn-success" type="submit">Buscar</button>
                </div>
            </div>
            
        </form>


        <?php 
        try{
        $start_date= $_GET['startdate'];
        $end_date= $_GET['enddate']; 
        $sql= "SELECT entrevistador, 
        COUNT(*) as Entrevistados
        FROM entrevista20251 
        WHERE fecha BETWEEN '$start_date' AND '$end_date'
        GROUP BY entrevistador";

        $result = $conexion->query($sql);
            if($result->rowCount()>0){
                $entrevistador= array();
                $entrevistados=array();
                
                while($row = $result->fetch()){
                    $entrevistador[] = $row["entrevistador"];
                    $entrevistados[] = $row["Entrevistados"];                  
                }
                unset($result);
            }else{
                echo "No records matching your query were found.";
            }
        }catch(PDOException $e){
            die("Error: Could not able to execute $sql. " . $e->getMessage());
        }
        //close conection
        // unset($conexion);
        
        ?>

        <?php 
       try{
       
        $sql2= "SELECT programa, 
        COUNT(*) as Cantidad
        FROM entrevista20251 
        GROUP BY programa";

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
                echo "No records matching your query were found.";
            }
        }catch(PDOException $e){
            die("Error: Could not able to execute $sql2. " . $e->getMessage());
        }
        //close conection
        unset($conexion);
        


        ?>


    <div class="container h-100%">
        <div class="row">
            <div class="card col mt-5" style="height=100vh">
                <canvas id="myChart" ></canvas>
            </div>
            <div class= "card col mt-5">
                <canvas id="myChart2" ></canvas>
            </div>
            
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>

        const entrevistador = <?php echo json_encode($entrevistador); ?>;
        const entrevistados = <?php echo json_encode($entrevistados); ?>

        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: entrevistador,
            datasets: [{
                label: 'Cantidad de Entrevistados',
                data: entrevistados,
                backgroundColor: ['purple'],
                borderColor: ['black'],
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });



        const programa = <?php echo json_encode($programa); ?>;
        const cantidad = <?php echo json_encode($cantidad); ?>

        //datos para el el segundo gráfico
        const data2 = {
                labels: programa,
                datasets: [{
                    label: 'My First Dataset',
                    data: cantidad,
                    backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                    ],
                    hoverOffset: 4
                }]
                };

        // Configuración para el segundo gráfico
        const config2 = {
            type: 'pie',
            data: data2,
            options: {
                
            }
        };
        const myChart2 = new Chart(
            document.getElementById('myChart2'),
            config2
         );

        </script>
  </body>
</html>