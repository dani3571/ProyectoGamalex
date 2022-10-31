
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
    <?php 
     include("/xampp/htdocs/Gamalex/EstructuraCuerpo/header.php");
       ?>
    
        <div class="form">
            <form action="./insertarProducto.php" method="POST">
                <h2 class="form_title">Ingrese datos del Producto</h2>
                <div class="form_container">
                    <div class="form_group">
                        <input type="text" id="IdProducto" class="form_input" placeholder=" " name="IdProducto" >
                        <label for="IdProducto" class="form_label">IdProducto:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_group">
                        <input type="text" id="Nombre" class="form_input" placeholder=" " name="Nombre" >
                        <label for="Nombre" class="form_label">Nombre:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_group">
                        <input type="text" id="Cantidad" class="form_input" placeholder=" " name="Cantidad" >
                        <label for="Cantidad" class="form_label">Cantidad:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_group">
                        <input type="text" id="PrecioUnidad" class="form_input" placeholder=" " name="PrecioUnidad" >
                        <label for="PrecioUnidad" class="form_label">Precio Unidad:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_group">
                        <input type="text" id="PrecioTotal" class="form_input" placeholder=" " name="PrecioTotal" >
                        <label for="PrecioTotal" class="form_label">Precio total:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_group">
                        <input type="text" id="Descripcion" class="form_input" placeholder=" " name="Descripcion" >
                        <label for="Descripcion" class="form_label">Descripcion:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_group">
                        <input type="text" id="Laboratorio" class="form_input" placeholder=" " name="Laboratorio" >
                        <label for="Laboratorio" class="form_label">Laboratorio:</label>
                        <span class="form_line"></span>
                    </div>
                        <input type="submit" class="form_submit" value="Guardar">
                </div>
            </form>
        </div>
    </body>
    <?php 
       include("/xampp/htdocs/Gamalex/EstructuraCuerpo/footer.php");
       ?>
    
</html>