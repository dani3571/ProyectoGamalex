<?php

include("../conexion.php");
$con=conectar();

$IdCategoria=$_GET['id'];
$Estado = 0;
//$sql="DELETE FROM producto  WHERE IdProducto='$IdProducto'";
$sql="UPDATE unidades SET Estado=$Estado WHERE IdUnidad = '$IdCategoria'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Index.php");
    }
?>