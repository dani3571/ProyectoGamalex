<?php

include("../conexion.php");
$con=conectar();

$IdProducto=$_GET['id'];
$Estado = 1;
//$sql="DELETE FROM producto  WHERE IdProducto='$IdProducto'";
$sql="UPDATE producto SET Estado=$Estado WHERE IdProducto = '$IdProducto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Index.php");
    }
?>