<?php

include("../conexion.php");
$con=conectar();
$cod_compra=$_GET['id'];

$sql="SELECT detallecompra.IdCompra, producto.IdProducto, producto.Nombre 
as Producto FROM detallecompra inner join producto 
on detallecompra.IdProducto = producto.IdProducto 
WHERE detallecompra.IdCompra='$cod_compra'";

$query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Compras</title>
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
                <h1>Registro de Compras</h1>
            </div>
            <div class="formulario">
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>IdCompra</th>
                            <th>IdProducto</th>
                            <th>Nombre producto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php  echo $row['IdCompra']?></th>
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