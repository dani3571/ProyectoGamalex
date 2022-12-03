<?php
    include('/xampp/htdocs/ProyectoGamalex/CRUDs/conexion.php');
    $con=conectar();
    $IdCompra = $_POST["IdCompra"];
    $FechaCompra = $_POST["FechaCompra"];
    $CantidadCompra = $_POST["Cantidad"];
    $TotalCompra= $_POST["Total"];
    $sql="INSERT INTO compra (IdCompra, FechaCompra, PrecioTotalCompra,CantidadCompra, Estado) VALUES ($IdCompra,'$FechaCompra',$TotalCompra,$CantidadCompra,1)";
    $query= mysqli_query($con,$sql);
    if($query){
        Header("Location: Index.php");
    }else {
        
    }
?>