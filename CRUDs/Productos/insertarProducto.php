<?php

include("../conexion.php");
$con = conectar();

$Nombre=$_POST['Nombre'];
$Cantidad=$_POST['Cantidad'];
$PrecioUnidad=$_POST['PrecioUnidad'];
$PrecioTotalProducto=$_POST['PrecioTotalProducto'];
$Descripcion=$_POST['Descripcion'];
$IdLaboratorio=$_POST['IdLaboratorio'];
/*$check = getimagesize($_FILES["Imagen"]["tmp_name"]);
if($check !== false){
    $Imagen=$_FILES['Imagen']['tmp_name'];
    $imgContent=addslashes(file_get_contents($Imagen));
}
else{
    $imgContent=null;
}*/
$Imagen=$_FILES['Imagen']['tmp_name'];
$imgContent=addslashes(file_get_contents($Imagen));
$sql="INSERT INTO producto (Nombre, Cantidad, PrecioUnidad, PrecioTotalProducto, Descripcion, Estado,Imagen, IdLaboratorio)
VALUES('$Nombre','$Cantidad','$PrecioUnidad','$PrecioTotalProducto','$Descripcion', 1,'$imgContent', $IdLaboratorio)";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Index.php");
}else {
    
}
?>