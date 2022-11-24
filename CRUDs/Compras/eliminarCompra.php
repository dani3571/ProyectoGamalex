<?php

include("../conexion.php");
$con=conectar();
$Estado = 0;
$cod_compra=$_GET['id'];

$sql="UPDATE compra SET Estado=$Estado  WHERE IdCompra='$cod_compra'";
$query=mysqli_query($con,$sql);
    if($query){
        Header("Location: Index.php");
    }
?>