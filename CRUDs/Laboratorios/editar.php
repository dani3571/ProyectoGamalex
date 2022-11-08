<?php
include('/xampp/htdocs/ProyectoGamalex/CRUDs/conexion.php');
$con = conectar();

$IdLaboratorio = $_POST['IdLaboratorio']; 
$Nombre=$_POST['Nombre'];
$Direccion=$_POST['Direccion'];

$sql="UPDATE laboratorio SET  Nombre='$Nombre',Direccion='$Direccion' WHERE IdLaboratorio='$IdLaboratorio'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: Index.php");
}else {
    
}

?>