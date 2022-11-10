<?php

include("../conexion.php");
$con=conectar();

$cod_venta = $_POST['IdVenta']; 
$Usuario = $_POST['Usuario'];
$Estado = $_POST['Estado'];
$sql = "SELECT *  FROM Usuario where Nombre = '$Usuario'";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);
$IdUsuario = $row['IdUsuario'];

$sql2="UPDATE venta SET IdUsuario = $IdUsuario,Estado = $Estado  WHERE IdVenta='$cod_venta'";
$query2=mysqli_query($con,$sql2);
    if($query){
        Header("Location: Index.php");
    }
?>