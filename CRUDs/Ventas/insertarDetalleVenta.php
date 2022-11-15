<?php
    include("../conexion.php");
    $con=conectar();
    $IdVenta = $_POST["IdVenta"];
    $IdProducto = $_POST["IdProducto"];
    $Cantidad = $_POST["Cantidad"];
    $sql="INSERT INTO detalleventa (IdVenta, IdProducto) VALUES ('$IdVenta',$IdProducto)";
    
    $query= mysqli_query($con,$sql);
    $sql2 ="UPDATE producto SET Cantidad = Cantidad - '$Cantidad' WHERE IdProducto='$IdProducto'";
    $query2 = mysqli_query($con,$sql2);
    if($query){
        Header("Location: Index.php");
    }else {
        
    }
?>