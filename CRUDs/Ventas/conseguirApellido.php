<?php
include("../conexion.php");
    $con=conectar();
    $NIT = $_POST['NIT'];
    $sql5 = "SELECT Apellido FROM cliente WHERE NIT = '$NIT'";
    $query5 = mysqli_query($con,$sql5);
    $Apellido=mysqli_fetch_array($query5);
    if($Apellido)
    {
        echo $Apellido['Apellido'];
    }
    
?>