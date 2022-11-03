<?php

include("../conexion.php");
$con=conectar();
$Estado = 0;
$cod_venta=$_GET['id'];

$sql="UPDATE venta SET Estado=$Estado WHERE IdVenta='$cod_venta'";
$query=mysqli_query($con,$sql);
    if($query){
        Header("Location: Index.php");
    }
?>