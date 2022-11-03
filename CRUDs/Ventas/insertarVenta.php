<?php
include("../conexion.php");
$con=conectar();

$Producto=$_POST['Producto'];
$sql = "SELECT *  FROM producto where Nombre = '$Producto'";
$query= mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
$IdProducto = $row['IdProducto'];
$IdUsuario = 1;
$IdCliente = 1;
$Estado = 1;
$FechaVenta = '2022-11-03 04:09:01';
$Cantidad=$_POST['Cantidad'];

$sql2="INSERT INTO venta (IdProducto, IdUsuario, IdCliente, Estado, FechaVenta, Cantidad) VALUES ($IdProducto,$IdUsuario,$IdCliente,$Estado,'$FechaVenta',$Cantidad)";
$query2= mysqli_query($con,$sql2);

if($query2){
    Header("Location: Index.php");
}else {
    
}
?>