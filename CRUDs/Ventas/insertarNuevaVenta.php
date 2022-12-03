<?php
    include("../conexion.php");
    $con=conectar();
    $IdUsuario = 1;
    $IdCliente = 1;
    $Estado = 1;
    $FechaVenta = $_POST["FechaVenta"];
    $Cantidad = $_POST["Cantidad"];
    $sql="INSERT INTO venta (IdUsuario, IdCliente, Estado, FechaVenta, Cantidad) VALUES ($IdUsuario,$IdCliente,$Estado,'$FechaVenta',$Cantidad)";
    $query= mysqli_query($con,$sql);
    
?>