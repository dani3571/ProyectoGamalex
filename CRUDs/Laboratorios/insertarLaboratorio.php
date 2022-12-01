<?php
include('/xampp/htdocs/ProyectoGamalex/CRUDs/conexion.php');
$con = conectar();
$Nombre=$_POST['Nombre'];
$Direccion=$_POST['Direccion'];
$NombreEncargado=$_POST['NombreEncargado'];
$TelefonoEncargado=$_POST['TelefonoEncargado'];

$sql="INSERT INTO laboratorio(Nombre, Direccion, NombreEncargado, TelefonoEncargado,Estado)
 VALUES('$Nombre','$Direccion', '$NombreEncargado', '$TelefonoEncargado', 1)";
$query= mysqli_query($con,$sql);
?>
