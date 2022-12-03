<?php
include("../conexion.php");
$con=conectar();
$b = true;

$IdProducto=$_POST['IdProducto'];
$Nombre=$_POST['Nombre'];
$Cantidad=$_POST['Cantidad'];
$PrecioUnidad=$_POST['PrecioUnidad'];
$PrecioTotalProducto=$_POST['PrecioTotalProducto'];
$Descripcion=$_POST['Descripcion'];
$IdLaboratorio=$_POST['IdLaboratorio'];

$Imagen=$_FILES['Imagen']['tmp_name'];
//$imgContent=addslashes(file_get_contents($Imagen));
$NombreC=$_POST['NombreC'];
$NombreU=$_POST['NombreU'];

$sql="UPDATE producto set Nombre='$Nombre',Cantidad='$Cantidad',PrecioUnidad='$PrecioUnidad',PrecioTotalProducto='$PrecioTotalProducto',Descripcion='$Descripcion', NombreC='$NombreC',NombreU='$NombreU' WHERE IdProducto='$IdProducto'";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Index.php");
}else {
    
}
?>