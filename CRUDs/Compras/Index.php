<?php 
    include("../conexion.php");
    $con=conectar();
    $sql="SELECT IdCompra,FechaCompra,PrecioTotalCompra,Estado,CantidadCompra FROM compra";
    
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Compras</title>
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
                <h1>Registro de Compras</h1>
            </div>
            <div class="formulario">
                <div class="crear">
                    <a class="link_crear" href="CrearNuevaCompra.php">CREAR</a>
                </div>
                
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>NumeroCompra</th>
                            <th>FechaCompra</th>
                            <th>PrecioTotalCompra</th>
                            <th>CantidadCompra</th>
                            
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_array($query)){
                                if($row[3]!=0)
                                {
                                    ?>
                                        <tr>
                                            <th><?php  echo $row['IdCompra']?></th>
                                            <th><?php  echo $row['FechaCompra']?></th>
                                            <th><?php  echo $row['PrecioTotalCompra']?></th>
                                            <th><?php  echo $row['CantidadCompra']?></th>
                                        
                                           
                                            <th><a href="detalleCompra.php?id=<?php echo $row['IdCompra'] ?>" class="link_editar">DetalleCompra</a></th>
                                            <th><a href="eliminarCompra.php?id=<?php echo $row['IdCompra'] ?>" class="link_eliminar">Eliminar</a></th>                                        
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