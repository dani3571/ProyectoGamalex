<?php
include("../conexion.php");
$con=conectar();

$IdLaboratorio=$_POST['IdLaboratorio'];
$Nombre=$_POST['Nombre'];
$Direccion=$_POST['Direccion'];

$sql="INSERT INTO laboratorio VALUES('$IdLaboratorio','$Nombre','$Direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Index.html");
}else {

}
?>