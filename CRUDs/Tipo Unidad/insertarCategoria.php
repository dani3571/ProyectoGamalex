<?php

include("../conexion.php");
$con = conectar();

$NombreU=$_POST['NombreU'];
$sql="INSERT INTO unidades (NombreU , Estado)
VALUES('$NombreU', 1)";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Index.php");
}else {
    
}
?>