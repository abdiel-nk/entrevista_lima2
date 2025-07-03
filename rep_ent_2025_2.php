<?php 
    require "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
</head>
     <body>
        <form action="" method="GET">
            <div class="form-group">
                <input onchange="filterData()" name="startdate" id="startdate" type="date">
            </div>
            <div class="form-group" >
                <input onchange="filterData()" name="enddate" id="enddate" type="date">
            </div>
            <div class="form-group">
                <button type="submit">Buscar</button>
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
        unset($conexion);?>





    <div>
        <canvas id="myChart" ></canvas>
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
        </script>
  </body>
</html>