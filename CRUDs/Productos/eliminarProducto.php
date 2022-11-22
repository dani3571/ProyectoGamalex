<?php

include("../conexion.php");
$con=conectar();

$IdProducto=$_GET['id'];

$sql="DELETE FROM producto  WHERE IdProducto='$IdProducto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Index.php");
    }
?>