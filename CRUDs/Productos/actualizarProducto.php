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
    <title>Actualizar Producto</title>
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
        <form action="./updateProducto.php" method="POST" enctype="multipart/form-data" >
                <h2 class="form_title">Ingrese datos de la Categoria</h2>
                <div class="form_container">
                <input class="form_input" type="hidden" name="IdProducto" value="<?php echo $row2['IdProducto']  ?>">
                    <div class="form_group">
                    
                    <input class="form_input" type="text" name="Nombre" value="<?php echo $row2['Nombre']  ?>">
                        <label for="Nombre" class="form_label">Nombre:</label>
                        <span class="form_line"></span>
                    
                    </div>

                    <div class="form_group">
                        <input class="form_input" type="text" name="Cantidad"  value="<?php echo $row2['Cantidad']   ?>" oninput="calculate()">
                        <label for="Direccion" class="form_label">Cantidad:</label>
                        <span class="form_line"></span>
                    </div>


                    <div class="form_group">
                    <input class="form_input" type="text" name="PrecioUnidad"  value="<?php echo $row2['PrecioUnidad']   ?>" oninput="calculate()">
                        <label for="Direccion" class="form_label">Precio Unidad:</label>
                        <span class="form_line"></span>
                    </div>

                    
                    <div class="form_group">
                    <input class="form_input" type="text" name="PrecioTotalProducto" value="<?php echo $row2['PrecioTotalProducto']  ?>">
                        <label for="Direccion" class="form_label">Precio Total Producto:</label>
                        <span class="form_line"></span>
                    </div>

                    <div class="form_group">
                    <input class="form_input" type="text" name="Descripcion" value="<?php echo $row2['Descripcion']  ?>">
                        <label for="Direccion" class="form_label">Descripcion:</label>
                        <span class="form_line"></span>
                    </div> 
                    <div class="form_group">
                    <input class="form_input" type="text" name="IdLaboratorio" value="<?php echo $row2['IdLaboratorio']  ?>">
                        <label for="Direccion" class="form_label">IdLaboratorio:</label>
                        <span class="form_line"></span>
                    </div> 

                     <div class="form_group">
                                <select id="NombreC" class="form_input" name="NombreC">
                                    <option selected="true" > <?php echo $row2['NombreC']  ?></option>
                                    <?php
                                        while($categoria = mysqli_fetch_array($query5)){
                                    ?>
                                        <option  ><?php  echo $categoria['NombreC']?> </option>   
                                       
                                    <?php 
                                        }
                                    ?> 
                                </select>
                                <label for="Productos" class="form_label">Categoria:</label>
                            </div>
                            <div class="form_group">
                                <select id="NombreU" class="form_input" name="NombreU">
                                    <option disabled="disabled" selected="true" > <?php echo $row2['NombreU']  ?></option>
                                    <?php
                                        while($unidades = mysqli_fetch_array($query6)){
                                    ?>
                                        <option  ><?php  echo $unidades['NombreU']?> </option>   
                                       
                                    <?php 
                                        }
                                    ?> 
                                </select>
                                <label for="Productos" class="form_label">Tipo Unidad:</label>
                            </div>
                    
                   <!-- <div  class="frm"  >
            <label for="Productos" class="form_label">Seleccione la imagen:</label>
       
            <input type="file" accept="image/jpeg"  name="Imagen"/>
            -->
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


