<?php
include("../conexion.php");
$con=conectar();
    $Cantidad = $_POST['Cantidad'];
    $sql5 = "SELECT Cantidad FROM producto WHERE IdProducto = '$Cantidad'";
    $query5 = mysqli_query($con,$sql5);
    $cantidad=mysqli_fetch_array($query5);
    echo $cantidad['Cantidad'];
?>