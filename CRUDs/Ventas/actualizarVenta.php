<?php 
    include("../conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM Usuario";
    $query=mysqli_query($con,$sql);
    $id=$_GET['id'];
    $sql2="SELECT * FROM venta WHERE IdVenta='$id'";
    $query2=mysqli_query($con,$sql2);
    $row2=mysqli_fetch_array($query2);

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
            <form action="./updateVenta.php" method="POST">
                <h2 class="form_title">Actualize los datos de la Venta</h2>
                <div class="form_container">
                    <div class="form_group">
                        <input type="number" id="IdVenta" placeholder=" " name="IdVenta"  class="form_input"value="<?php echo $row2['IdVenta']  ?>" readonly>
                        <label for="IdVenta" class="form_label">Id Venta:</label>
                        <span class="form_line"></span>
                    </div>
                    
                    <div class="form_group">
                        <select id="Usuario" class="form_input" name="Usuario">
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <option><?php  echo $row['Nombre']?> </option>   
                            <?php 
                                }
                            ?>
                        </select>
                        <label for="Usuario" class="form_label">Usuario:</label>
                        <span class="form_line"></span>
                    </div>

                    <div class="form_group">
                        <select id="Estado" class="form_input" name="Estado">
                            <option>0</option>  
                            <option>1</option>
                        </select>
                        <label for="Estado" class="form_label">Estado:</label>
                        <span class="form_line"></span>
                    </div>
                    <input type="submit" class="form_submit" value="Guardar">
                      <a style="color:blue" href="index.php"><~ Regresar</a>
                </div>
            </form>
        </div>
    </body>
</html>