<?php 
    include("../conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM venta inner join producto on venta.IdProducto = producto.IdProducto";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ventas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/estilosCRUDS.css">
        <script src="https://cdn.tailwindcss.com"></script>
    </head> 
    <body>
        <div class="header-container">
            <?php
                include("../../EstructuraCuerpo/header.php");
            ?>
        </div>
        <div class="main-container">
            <div class="titulo">
                <h1>Registro de Ventas</h1>
            </div>
            <div class="formulario">
                <div class="crear">
                    <a class="link_crear" href="CrearVenta.php">CREAR</a>
                </div>
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>IdVenta</th>
                            <th>Producto</th>
                            <th>Fecha Venta</th>
                            <th>Cantidad</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                                if($row[4]!=0)
                                {
                        ?>
                            <tr>
                                <th><?php  echo $row['IdVenta']?></th>
                                <th><?php  echo $row['Nombre']?></th>   
                                <th><?php  echo $row['FechaVenta']?></th>
                                <th><?php  echo $row[6]?></th>
                                <th><a href="actualizarVenta.php?id=<?php echo $row['IdVenta'] ?>" class="link_editar">Editar</a></th>
                                <th><a href="eliminarVenta.php?id=<?php echo $row['IdVenta'] ?>" class="link_eliminar">Eliminar</a></th>                                        
                            </tr>
                        <?php 
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>