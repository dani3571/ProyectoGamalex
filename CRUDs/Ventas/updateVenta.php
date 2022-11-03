<?php

include("../conexion.php");
$con=conectar();

$cod_venta = $_POST['IdVenta']; 
$Producto = $_POST['Producto'];
$Cantidad = $_POST['Cantidad'];
$sql = "SELECT *  FROM producto where Nombre = '$Producto'";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);
$IdProducto = $row['IdProducto'];

$sql2="UPDATE venta SET IdProducto = $IdProducto,Cantidad = $Cantidad  WHERE IdVenta='$cod_venta'";
$query2=mysqli_query($con,$sql2);
    if($query){
        Header("Location: Index.php");
    }
?>