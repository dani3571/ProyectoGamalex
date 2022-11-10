<?php

include("../conexion.php");
$con = conectar();

$Nombre=$_POST['Nombre'];
$Cantidad=$_POST['Cantidad'];
$PrecioUnidad=$_POST['PrecioUnidad'];
$PrecioTotalProducto=$_POST['PrecioTotalProducto'];
$Descripcion=$_POST['Descripcion'];
$IdLaboratorio=$_POST['IdLaboratorio'];

$sql="INSERT INTO producto (Nombre, Cantidad, PrecioUnidad, PrecioTotalProducto, Descripcion, Estado, IdLaboratorio)
VALUES('$Nombre','$Cantidad','$PrecioUnidad','$PrecioTotalProducto','$Descripcion', 1, $IdLaboratorio)";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Index.php");
}else {
    
}
?>