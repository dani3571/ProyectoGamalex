<?php
include("../conexion.php");
$con=conectar();
$b = true;

$IdUnidad=$_POST['IdUnidad'];
$NombreU=$_POST['NombreU'];

$sql="UPDATE unidades set NombreU='$NombreU' WHERE IdUnidad='$IdUnidad'";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Index.php");
}else {
    
}
?>