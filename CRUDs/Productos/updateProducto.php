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
$Estado=1;
$Imagen=$_FILES['Imagen']['tmp_name'];
$imgContent=addslashes(file_get_contents($Imagen));


$sql="UPDATE producto set IdProducto='$IdProducto',Nombre='$Nombre',Cantidad='$Cantidad',PrecioUnidad='$PrecioUnidad',PrecioTotalProducto='$PrecioTotalProducto',Descripcion='$Descripcion',$Estado=1,Imagen='$imgContent', IdLaboratorio='$IdLaboratorio'WHERE IdProducto='$IdProducto'";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location:../Index.html");
}else {
    
}
?>