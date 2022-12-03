<?php 
    include("../conexion.php");
    $con=conectar();

   // $id=1;
    $id=$_GET['id'];
    $sql="SELECT * FROM producto where IdProducto='$id'";
    $query=mysqli_query($con,$sql);
    $row2=mysqli_fetch_array($query);
    $sql5 = "SELECT * FROM categoria";
    $query5 = mysqli_query($con,$sql5); 
    $sql6 = "SELECT * FROM unidades";
    $query6 = mysqli_query($con,$sql6); 
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Imagen</title>
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
        <form action="./updateimagen.php" method="POST" enctype="multipart/form-data" >
                <h2 class="form_title">Cambie la imagen</h2>
                <div class="form_container">
              <div  class="form"  >
              <input class="form_input" type="hidden" name="IdProducto" value="<?php echo $row2['IdProducto']  ?>">
            <label for="Productos" class="form_label">Seleccione la imagen:</label>
       
            <input type="file" accept="image/jpeg"  name="Imagen"/>
            
        </div>
                    <input class="form_input" type="submit" class="form_submit" value="Modificar">
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