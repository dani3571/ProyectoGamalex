<?php
    include("../conexion.php");
    $con=conectar();
    $NIT = $_POST['NIT'];
    $Apellido = $_POST['Apellido'];
    $Estado = 1;
    $sql = "SELECT * FROM cliente WHERE NIT = '$NIT'";
    $query = mysqli_query($con,$sql);
    $consulta=mysqli_fetch_array($query);
    if($consulta)
    {

    }
    else
    {
        $sql2 ="INSERT INTO cliente (NIT, Apellido, Estado) VALUES ('$NIT','$Apellido', $Estado)";
        $query2 = mysqli_query($con,$sql2);
    }
?>