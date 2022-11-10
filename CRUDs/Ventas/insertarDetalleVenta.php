<?php
    include("../conexion.php");
    $con=conectar();
    $IdVenta = $_POST["IdVenta"];
    $IdProducto = $_POST["IdProducto"];
    $sql="INSERT INTO detalleventa (IdVenta, IdProducto) VALUES ('$IdVenta',$IdProducto)";
    $query= mysqli_query($con,$sql);
    if($query){
        Header("Location: Index.php");
    }else {
        
    }
?>