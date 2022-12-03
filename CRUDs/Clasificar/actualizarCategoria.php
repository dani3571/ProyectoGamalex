<?php 
    include("../conexion.php");
    $con=conectar();

   // $id=1;
    $id=$_GET['id'];
    $sql="SELECT * FROM categoria where IdCategoria='$id'";
    $query=mysqli_query($con,$sql);
    $row2=mysqli_fetch_array($query);?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Categoria</title>
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
        <form action="./updateCategoria.php" method="POST" enctype="multipart/form-data" >
                <h2 class="form_title">Ingrese datos de la Categoria</h2>
                <div class="form_container">
                <input class="form_input" type="hidden" name="IdCategoria" value="<?php echo $row2['IdCategoria']  ?>">
                    <div class="form_group">
                    
                    <input class="form_input" type="text" name="NombreC" value="<?php echo $row2['NombreC']  ?>">
                        <label for="NombreC" class="form_label">Nombre Categoria:</label>
                        <span class="form_line"></span>
                    
                    </div>

                    
                    <input class="form_input" type="submit" class="form_submit" value="Guardar">
                    <a style="color:blue" href="index.php"><~ Regresar</a>
                </div>
            </form>
        </div>
       
    </body>
</html>
<script>
/*
try {function calculate() {
var myBox1 = document.getElementById('Cantidad').value; 
var myBox2 = document.getElementById('PrecioUnidad').value;
var result = document.getElementById('PrecioTotalProducto'); 
var myResult = myBox1 * myBox2;
result.value = myResult;


}
} catch (error) { throw error; } 
*/
</script>