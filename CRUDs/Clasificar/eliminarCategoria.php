<?php

include("../conexion.php");
$con=conectar();

$IdCategoria=$_GET['id'];
$Estado = 0;
//$sql="DELETE FROM producto  WHERE IdProducto='$IdProducto'";
$sql="UPDATE categoria SET Estado=$Estado WHERE IdCategoria = '$IdCategoria'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Index.php");
    }
?>