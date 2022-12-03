<?php
include('/xampp/htdocs/ProyectoGamalex/CRUDs/conexion.php');
$con = conectar();

$IdLaboratorio = $_POST['IdLaboratorio']; 
$Nombre=$_POST['Nombre'];
$Direccion=$_POST['Direccion'];
$NombreEncargado=$_POST['NombreEncargado'];
$TelefonoEncargado=$_POST['TelefonoEncargado'];

$sql="UPDATE laboratorio SET  Nombre='$Nombre',Direccion='$Direccion', NombreEncargado='$NombreEncargado',
TelefonoEncargado='$TelefonoEncargado' WHERE IdLaboratorio='$IdLaboratorio'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: Index.php");
}else {
    
}

?>