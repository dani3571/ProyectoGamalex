<?php 
  include("../conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM usuario";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laboratorios</title>
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
        <div class="form">
            <form action="./insertarUsuario.php" method="POST">
                <h2 class="form_title">Ingrese datos del Usuario</h2>
                <div class="form_container">
                    <div class="form_group">
                        <input type="text" id="Nombre" class="form_input" placeholder=" " name="Nombre" >
                        <label for="Nombre" class="form_label">Nombre:</label>
                        <span class="form_line"></span>
                        
                    </div>
                    <div class="form_group">
                        <input type="text" id="Apellido" class="form_input" placeholder=" " name="Apellido" >
                        <label for="Apellido" class="form_label">Apellido:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_group">
                        <input type="text" id="CI" class="form_input" placeholder=" " name="CI" >
                        <label for="CI" class="form_label">CI:</label>
                        <span class="form_line"></span>
                        
                    </div>
                    <div class="form_group">
                        <input type="text" id="Rol" class="form_input" placeholder=" " name="Rol" >
                        <label for="Rol" class="form_label">Rol:</label>
                        <span class="form_line"></span>
                        
                    </div>
                    <div class="form_group">
                        <input type="text" id="Contrasena" class="form_input" placeholder=" " name="Contrasena" >
                        <label for="Contrasena" class="form_label">Contraseña:</label>
                        <span class="form_line"></span>
                        
                    </div>
                    <div class="form_group">
                        <input type="text" id="ContraseñaC" class="form_input" placeholder=" " name="ContraseñaC" >
                        <label for="ContraseñaC" class="form_label">Contraseña Confirmacion:</label> 
                        <span class="form_line"></span>
                    </div>
                    <input type="submit" class="form_submit" value="Guardar">

                    <a style="color:blue" href="index.php"><~ Regresar</a>
                    
                </div>
            </form>
        </div>
    </body>
</html>