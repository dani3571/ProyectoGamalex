<?php
include("../conexion.php");
$con=conectar();

$IdProducto=$_POST['IdProducto'];
$Nombre=$_POST['Nombre'];
$Cantidad=$_POST['Cantidad'];
$PrecioUnidad=$_POST['PrecioUnidad'];
$PrecioTotalProducto=$_POST['PrecioTotalProducto'];
$Descripcion=$_POST['Descripcion'];
$IdLaboratorio=$_POST['IdLaboratorio'];

$sql="UPDATE producto set IdProducto='$IdProducto',Nombre='$Nombre',Cantidad='$Cantidad',PrecioUnidad='$PrecioUnidad',PrecioTotalProducto='$PrecioTotalProducto',Descripcion='$Descripcion',IdLaboratorio='$IdLaboratorio'WHERE IdProducto=1";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location:../Index.html");
}else {
    
}
?>