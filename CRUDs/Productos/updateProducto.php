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
$IdProducto=$_POST['IdProducto'];
$Nombre=$_POST['Nombre'];
$Cantidad=$_POST['Cantidad'];
$PrecioUnidad=$_POST['PrecioUnidad'];
$PrecioTotalProducto=$_POST['PrecioTotalProducto'];
$Descripcion=$_POST['Descripcion'];
$IdLaboratorio=$_POST['IdLaboratorio'];
//$Estado=1;
$Imagen=$_FILES['Imagen']['tmp_name'];
$imgContent=addslashes(file_get_contents($Imagen));
$NombreC=$_POST['NombreC'];
$NombreU=$_POST['NombreU'];
//$imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));


//$sql="UPDATE producto set Nombre='$Nombre',Cantidad='$Cantidad',PrecioUnidad='$PrecioUnidad',PrecioTotalProducto='$PrecioTotalProducto',Descripcion='$Descripcion',$Estado=1,Imagen= null, IdLaboratorio='$IdLaboratorio'WHERE IdProducto='$IdProducto'";
$sql="UPDATE producto set Nombre='$Nombre',Cantidad='$Cantidad',PrecioUnidad='$PrecioUnidad',PrecioTotalProducto='$PrecioTotalProducto',Descripcion='$Descripcion', Imagen = '$imgContent',NombreC='$NombreC',NombreU='$NombreU' WHERE IdProducto='$IdProducto'";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Index.php");
}else {
    
}
?>