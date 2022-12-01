<?php

include("../conexion.php");
$con = conectar();

$Nombre=$_POST['Nombre'];
$Cantidad=$_POST['Cantidad'];
$PrecioUnidad=$_POST['PrecioUnidad'];
$PrecioTotalProducto=$_POST['PrecioTotalProducto'];
$Descripcion=$_POST['Descripcion'];
$IdLaboratorio=$_POST['IdLaboratorio'];
$NombreC=$_POST['NombreC'];
$NombreU=$_POST['NombreU'];
$Imagen=$_FILES['Imagen']['tmp_name'];
$imgContent=addslashes(file_get_contents($Imagen));
$sql="INSERT INTO producto (Nombre, Cantidad, PrecioUnidad, PrecioTotalProducto, Descripcion, Estado,Imagen, IdLaboratorio,NombreC,NombreU)
VALUES('$Nombre','$Cantidad','$PrecioUnidad','$PrecioTotalProducto','$Descripcion', 1,'$imgContent', '$IdLaboratorio','$NombreC','$NombreU')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Index.php");
}else {
    
}
?>