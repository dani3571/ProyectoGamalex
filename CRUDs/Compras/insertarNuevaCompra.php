<?php
    include("../conexion.php");
    $con=conectar();
    $IdCompra = $_POST["IdCompra"];
    $FechaCompra = $_POST["FechaCompra"];
    $CantidadCompra = $_POST["Cantidad"];
    $TotalCompra= $_POST["Total"];
    $sql="INSERT INTO compra (IdCompra, FechaCompra, PrecioTotalCompra,CantidadCompra) VALUES ($IdCompra,'$FechaCompra',$TotalCompra,$CantidadCompra)";
    $query= mysqli_query($con,$sql);
    if($query){
        Header("Location: Index.php");
    }else {
        
    }
?>