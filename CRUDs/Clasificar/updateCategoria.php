<?php
include("../conexion.php");
$con=conectar();
$b = true;
/*
$a = null;
$IdProducto=$_POST['IdProducto'];
$sql1="UPDATE producto set Imagen= '$a' WHERE IdProducto='$IdProducto'";
$query1= mysqli_query($con,$sql1);
*/
$IdCategoria=$_POST['IdCategoria'];
$NombreC=$_POST['NombreC'];

$sql="UPDATE categoria set NombreC='$NombreC' WHERE IdCategoria='$IdCategoria'";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Index.php");
}else {
    
}
?>