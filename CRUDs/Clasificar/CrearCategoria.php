<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Crear Producto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/estilosCRUDS.css">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <?php  
    
    include("../conexion.php");
    $con=conectar();
    $sql4 = "SELECT * FROM laboratorio";
    $query4 = mysqli_query($con,$sql4); 
    ?>
    <body>
    <div class="header-container">
            <?php
                include("../../EstructuraCuerpo/header.php");
            ?>
        </div>
    
        <div class="form">
            <form action="./insertarCategoria.php" method="POST" enctype="multipart/form-data">
                <h2 class="form_title">Ingrese los datos de la Categoria</h2>
                <div class="form_container">
                    <div class="form_group">
                        <input type="text" id="NombreC" class="form_input" placeholder=" " name="NombreC" required  >
                        <label for="NombreC" class="form_label">Nombre Categoria:</label>
                        <span class="form_line"></span>
                    </div>
                           
                        <input type="submit" class="form_submit" onclick="return foo();"  value="Guardar"  >
                </div>
               
            </form>
           
    
    </body>
    
</html>
<!--Codigo para calcular el precio total del producto -->


<script>
   function foo() {
   alert("Datos Correctos");
   return true;
}
</script>