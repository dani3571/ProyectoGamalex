<?php

include("../conexion.php");
$con = conectar();

$NombreC=$_POST['NombreC'];
$sql="INSERT INTO categoria (NombreC , Estado)
VALUES('$NombreC', 1)";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Index.php");
}else {
    
}
?>