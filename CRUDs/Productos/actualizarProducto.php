<?php 
    include("../conexion.php");
    $con=conectar();
    
    $query=mysqli_query($con,$sql);
    $id=1;
    //$id=$_GET['IdProducto'];
    $sql="SELECT * FROM producto where IdProducto='$id'";
    $query=mysqli_query($con,$sql);
    $row2=mysqli_fetch_array($query);?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ActualizarProducto</title>
</head>
<body>
    <div class=form>
        <form action="updateProducto.php" method="POST">
        <input type="hidden" name="IdProducto" value="<?php echo $row2['IdProducto']  ?>">
        <input type="text" name="Nombre" value="<?php echo $row2['Nombre']  ?>">
        <input type="text" name="Cantidad" value="<?php echo $row2['Cantidad']  ?>">
        <input type="text" name="PrecioUnidad" value="<?php echo $row2['PrecioUnidad']  ?>">
        <input type="text" name="PrecioTotalProducto" value="<?php echo $row2['PrecioTotalProducto']  ?>">
        <input type="text" name="Descripcion" value="<?php echo $row2['Descripcion']  ?>">
        <input type="text" name="IdLaboratorio" value="<?php echo $row2['IdLaboratorio']  ?>">
        <input type="submit" class="form_submit" value="Guardar">
        </form>
    </div>
</body>
</html>