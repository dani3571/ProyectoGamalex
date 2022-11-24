<?php

include("../conexion.php");
$con=conectar();

$cod_compra = $_POST['IdCompra']; 
$Fecha_Compra = $_POST['Fecha_Compra'];
$Precio_Total_Compra = $_POST['Precio_Total_Compra'];
$Cantidad_Compra = $_POST['Cantidad_Compra'];
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);
$sql2="UPDATE compra SET IdUsuario = $IdUsuario,Precio_Total_Compra = $Estado  WHERE IdCompra='$cod_compra'";
$query2=mysqli_query($con,$sql2);
    if($query){
        Header("Location: Index.php");
    }
?>