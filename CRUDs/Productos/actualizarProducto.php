<?php 
    include("../conexion.php");
    $con=conectar();

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
    <link rel="stylesheet" href="../css/estilosCRUDS.css">
        <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
        <div class="header-container">
            <?php
                include("../../EstructuraCuerpo/header.php");
            ?>
        </div>
        <div class="form">
        <form action="./editar.php" method="POST">
                <h2 class="form_title">Ingrese datos del Laboratorio</h2>
                <div class="form_container">
                <input class="form_input" type="hidden" name="IdProducto" value="<?php echo $row2['IdProducto']  ?>">
                    <div class="form_group">
                    
                    <input class="form_input" type="text" name="Nombre" value="<?php echo $row2['Nombre']  ?>">
                        <label for="Nombre" class="form_label">Nombre:</label>
                        <span class="form_line"></span>
                    
                    </div>

                    <div class="form_group">
                        <input class="form_input" type="text" name="Cantidad" value="<?php echo $row2['Cantidad']  ?>">
                        <label for="Direccion" class="form_label">Cantidad:</label>
                        <span class="form_line"></span>
                    </div>


                    <div class="form_group">
                    <input class="form_input" type="text" name="PrecioUnidad" value="<?php echo $row2['PrecioUnidad']  ?>">
                        <label for="Direccion" class="form_label">Precio Unidad:</label>
                        <span class="form_line"></span>
                    </div>

                    
                    <div class="form_group">
                    <input class="form_input" type="text" name="PrecioTotalProducto" value="<?php echo $row2['PrecioTotalProducto']  ?>">
                        <label for="Direccion" class="form_label">Precio Unidad:</label>
                        <span class="form_line"></span>
                    </div>

                    <div class="form_group">
                    <input class="form_input" type="text" name="Descripcion" value="<?php echo $row2['Descripcion']  ?>">
                        <label for="Direccion" class="form_label">Descripcion:</label>
                        <span class="form_line"></span>
                    </div>

                    <input class="form_input" type="submit" class="form_submit" value="Guardar">
                    <a style="color:blue" href="index.php"><~ Regresar</a>
                </div>
            </form>
        </div>
    </body>
</html>


