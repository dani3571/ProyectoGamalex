
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
            <form action="./insertarProducto.php" method="POST" enctype="multipart/form-data>
                <h2 class="form_title">Ingrese datos del Producto</h2>
                <div class="form_container">
                    <div class="form_group">
                        <input type="text" id="Nombre" class="form_input" placeholder=" " name="Nombre" >
                        <label for="Nombre" class="form_label">Nombre:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_group">
                        <input type="text" id="Cantidad" class="form_input" placeholder=" " name="Cantidad"  oninput="calculate()" >
                        <label for="Cantidad" class="form_label">Cantidad:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_group">
                        <input  type="text" id="PrecioUnidad" class="form_input" placeholder=" " name="PrecioUnidad" oninput="calculate()" >
                        <label for="PrecioUnidad" class="form_label">Precio Unidad:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_group">
                        <input type="text" id="PrecioTotalProducto" class="form_input" placeholder=" " name="PrecioTotalProducto" >
                        <label for="PrecioTotal" class="form_label">Precio total:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_group">
                        <input type="text" id="Descripcion" class="form_input" placeholder=" " name="Descripcion" >
                        <label for="Descripcion" class="form_label">Descripcion:</label>
                        <span class="form_line"></span>
                    </div>
                   <!-- <div class="form_group">
                        <input type="text" id="Laboratorio" class="form_input" placeholder=" " name="IdLaboratorio" >
                        <label for="Laboratorio" class="form_label">Laboratorio:</label>
                        <span class="form_line"></span>
                    </div>--> 
                    <div class="form_group">
                                <select id="IdLaboratorio" class="form_input" name="IdLaboratorio">
                                    <option>--Seleccione el laboratotio--</option>
                                    <?php
                                        while($productos = mysqli_fetch_array($query4)){
                                    ?>
                                        <option><?php  echo $productos['IdLaboratorio']?> </option>   
                                    <?php 
                                        }
                                    ?> 
                                </select>
                                <label for="Productos" class="form_label">IdLaboratorio:</label>
                            </div>
                            <div  class="from"  >
            <label for="Productos" class="form_label">Seleccione la imagen:</label>
       
            <input type="file" name="Imagen"/>
        </div>
                            
                        <input type="submit" class="form_submit" value="Guardar">
                </div>
               
            </form>
           
    
    </body>
    
</html>
<!--Codigo para calcular el precio total del producto -->

<script>try {function calculate() {
var myBox1 = document.getElementById('Cantidad').value; 
var myBox2 = document.getElementById('PrecioUnidad').value;
var result = document.getElementById('PrecioTotalProducto'); 
var myResult = myBox1 * myBox2;
result.value = myResult;


}
} catch (error) { throw error; }

</script>
