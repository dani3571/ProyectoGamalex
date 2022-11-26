<?php 
    include("../conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM usuario";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Usuarios</title>
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
                <h1>Registro de Usuarios</h1>
            </div>
            <div class="formulario">
                <div class="crear">
                    <a class="link_crear" href="CrearUsuario.php">CREAR</a>
                </div>
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>IdUsuario</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>CI</th>
                            <th>Rol</th>
                            <th>Estado</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                                if($row[6]!=0)
                                {
                        ?>
                            <tr>
                                <th><?php echo $row['IdUsuario']?></th>
                                <th><?php echo $row['Nombre']?></th>   
                                <th><?php echo $row['Apellido']?></th>
                                <th><?php echo $row['CI']?></th>
                                <th><?php echo $row['Rol']?></th>
                                <th><?php echo $row['Estado']?></th>
                                <th><a href="./Ventas/actualizarVenta.php?id=<?php echo $row['IdVenta'] ?>" class="link_editar">Editar</a></th>
                                <th><a href="./eliminarUsuario.php?id=<?php echo $row['IdUsuario'] ?>" class="link_eliminar">Eliminar</a></th>                                        
                            </tr>
                        <?php 
                                }
                            }
                        ?>
                    </tbody>
                </table>           
            </div>  
            <br><br><br><br>   
        </div>
   
    </body>

</html>

