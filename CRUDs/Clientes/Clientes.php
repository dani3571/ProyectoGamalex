<?php 
    include('/xampp/htdocs/ProyectoGamalex/CRUDs/conexion.php');
    $con = conectar();
    $sql="SELECT *  FROM cliente";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Usuarios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/estilosCRUDS.css">
        <script src="https://cdn.tailwindcss.com"></script>
    </head> 
    <body>
 
    <div class="header-container">
            <?php
             include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/header.php");
            ?>
        </div>

        <div class="main-container">
            <div class="titulo">
                <h1>Listado de clientes</h1>
            </div>
            <div class="formulario">
              
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>IdCliente</th>
                            <th>NIT</th>
                            <th>Apellido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                                if($row[3]!=0)
                                {
                        ?>
                            <tr>
                                <th><?php  echo $row['IdCliente']?></th>
                                <th><?php  echo $row['NIT']?></th>   
                                <th><?php  echo $row['Apellido']?></th>                                      
                            </tr>
                        <?php 
                                }
                            }
                        ?>
                    </tbody>
                </table>           
            </div>  
            <br><br><br><br>   
        </div>
   
    </body>

</html>

