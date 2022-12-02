<?php 
 
    include("./conexion.php");
    $con=conectar();
    $sql="SELECT * FROM producto";
    $query=mysqli_query($con,$sql);
    $total_rows = $query -> num_rows;
    if($total_rows > 0){
        while($productos = mysqli_fetch_array($query)){
            $data[] = $productos;
            
        }
        echo json_encode($data);
    }
?>