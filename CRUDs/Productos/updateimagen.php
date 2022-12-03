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
//$Estado=1;
$Imagen=$_FILES['Imagen']['tmp_name'];
$imgContent=addslashes(file_get_contents($Imagen));

//$imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));



$sql="UPDATE producto set  Imagen = '$imgContent' WHERE IdProducto=$IdProducto";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Index.php");
}else {
    
}
?>