<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Productos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/estilosCRUDS.css">
        <script src="https://cdn.tailwindcss.com"></script>
    </head> 
    <body>
        <div class="main-container">
            <div class="titulo">
                <h1>Registro de Productos</h1>
            </div>
            <div class="formulario">
                <div class="crear">
                    <a class="link_crear" href="CrearProducto.html">CREAR</a>
                </div>
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>IdProducto</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio Unidad</th>
                            <th>Precio total</th>
                            <th>Descripcion</th>
                            <th>Laboratorio</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>Ibuprofeno</th>
                            <th>50</th>
                            <th>1.50</th>
                            <th>75</th>
                            <th>Bajo receta medica</th>
                            <th>Inti</th>
                            <th><a class="link_editar" href="actualizar.php">Editar</a></th>
                            <th><a class="link_eliminar" href="eliminar.php">Eliminar</a></th>   
                        </tr>
                      
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>