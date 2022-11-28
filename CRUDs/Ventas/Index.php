<?php 
    include("../conexion.php");
    include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/P.php");
    $con=conectar();
    $sql="SELECT IdVenta,venta.IdUsuario,venta.IdCliente,cliente.NIT,venta.Estado,FechaVenta,Cantidad,
    CONCAT(Usuario.Nombre,' ', Usuario.Apellido) as NombreCompleto  
    FROM venta inner join Usuario on venta.IdUsuario = Usuario.IdUsuario
    inner join cliente on venta.IdCliente = cliente.IdCliente";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ventas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/newStyles.css">
        <script src="https://cdn.tailwindcss.com"></script>
      
    </head> 
    <body>
        <div class="header-container">
         
        </div>
        <div class="main-container">
            <div class="titulo">
                <h1>Registro de Ventas</h1>
            </div>
            <div class="formulario">
                <div class="crear">
                    <a class="link_crear" href="CrearNuevaVenta.php">CREAR</a>
                </div>
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Numero venta</th>
                            <th>Usuario</th>
                            <th>NIT</th>
                            <th>FechaVenta</th>
                            <th>Cantidad</th>
                            <th></th>
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
                                <th><?php  echo $row['NombreCompleto']?></th>
                                <th><?php  echo $row['NIT']?></th>
                                <th><?php  echo $row['FechaVenta']?></th>
                                <th><?php  echo $row['Cantidad']?></th>  
                                <th><a href="actualizarVenta.php?id=<?php echo $row['IdVenta'] ?>" class="link_editar">Editar</a></th>
                                <th><a href="detalleVenta.php?id=<?php echo $row['IdVenta'] ?>" class="link_editar">Detalle</a></th>
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

<?php
include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/S.php");
?>
