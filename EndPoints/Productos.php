<?php 
 
    include("./conexion.php");
    $con=conectar();
    $sql="SELECT IdProducto,Nombre,Cantidad,PrecioUnidad,PrecioTotalProducto,Descripcion,Estado,IdLaboratorio FROM producto";
    $query=mysqli_query($con,$sql);
    $data = array();
    while($row = mysqli_fetch_assoc($query))
    {
        $data[] = $row;
    }
    print json_encode($data);
?>