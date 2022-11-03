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
        <div class="head_container">
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
                    <a class="link_crear" href="CrearUsuario.html">CREAR</a>
                </div>
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>IdUsuario</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>Adrian</th>
                            <th>Herrera</th>
                            <th>Adr123</th>
                            <th>a@gmail.com</th>
                            <th><a class="link_editar" href="actualizar.php">Editar</a></th>
                            <th><a class="link_eliminar" href="eliminar.php">Eliminar</a></th>   
                        </tr>
                        <tr>
                            <th>2</th>
                            <th>Alex</th>
                            <th>Claros</th>
                            <th>Clr1234</th>
                            <th>ale@gmail.com</th>
                            <th><a class="link_editar" href="actualizar.php">Editar</a></th>
                            <th><a class="link_eliminar" href="eliminar.php">Eliminar</a></th>   
                        </tr>
                        <tr>
                            <th>3</th>
                            <th>Limber</th>
                            <th>Calle</th>
                            <th>Lim1234</th>
                            <th>lim@gmail.com</th>
                            <th><a class="link_editar" href="actualizar.php">Editar</a></th>
                            <th><a class="link_eliminar" href="eliminar.php">Eliminar</a></th>   
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>