<?php
include('/xampp/htdocs/ProyectoGamalex/CRUDs/conexion.php');
$con = conectar();
$Nombre=$_POST['Nombre'];
$Direccion=$_POST['Direccion'];

$sql="INSERT INTO laboratorio(Nombre, Direccion, Estado)
 VALUES('$Nombre','$Direccion',1)";
$query= mysqli_query($con,$sql);

?>
