<?php

include("../conexion.php");
$con=conectar();
$cod_venta=$_GET['id'];

$sql="SELECT detalleventa.IdVenta, producto.IdProducto, producto.Nombre 
as Producto FROM detalleventa inner join producto on detalleventa.IdProducto = producto.IdProducto WHERE detalleventa.IdVenta='$cod_venta'";

$query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ventas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/estilosCRUDS.css">
        <script src="https://cdn.tailwindcss.com"></script>
    </head> 
    <body>
        <div class="header-container">
            <?php
                include("../../EstructuraCuerpo/header.php");
            ?>
        </div>
        <div class="main-container">
            <div class="titulo">
                <h1>Registro de Ventas</h1>
            </div>
            <div class="formulario">
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>IdVenta</th>
                            <th>IdProducto</th>
                            <th>Nombre producto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php  echo $row['IdVenta']?></th>
                                <th><?php  echo $row['IdProducto']?></th>
                                <th><?php  echo $row['Producto']?></th>                                        
                            </tr>
                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>