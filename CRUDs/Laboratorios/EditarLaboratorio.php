<?php 
include('/xampp/htdocs/ProyectoGamalex/CRUDs/conexion.php');
$con = conectar();
//$sql="SELECT *  FROM venta inner join producto on venta.IdProducto = producto.IdProducto";
//$query=mysqli_query($con,$sql);

$id=$_GET['id'];
$sql2="SELECT * FROM laboratorio WHERE IdLaboratorio='$id'";
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


        <form action="./editar.php" method="POST">
                <h2 class="form_title">Ingrese datos del Laboratorio</h2>
                <div class="form_container">
                    <input  type="hidden" name="IdLaboratorio" value="<?php echo $row2['IdLaboratorio']  ?>">
                    <div class="form_group">
                        <input pattern="[A-Za-z- -\.]+"  minlength="4" maxlength="30" required 
                        title="Solo letras. Tamaño mínimo: 4" type="text" id="Nombre" name="Nombre" class="form_input" placeholder=" " value="<?php echo $row2['Nombre']  ?>" >
                        <label for="Nombre" class="form_label">Nombre:</label>
                        <span class="form_line"></span>
                    
                    </div>

                    <div class="form_group">
                        <input pattern="[A-Za-z0-9- -,]+"  minlength="6" maxlength="40" required 
                        title="Solo letras y numeros. Tamaño mínimo: 6" type="text" id="Direccion" name="Direccion" class="form_input" placeholder=" " value="<?php echo $row2['Direccion']  ?>">
                        <label for="Direccion" class="form_label">Direccion:</label>
                        <span class="form_line"></span>
                    </div>

                    <div class="form_group">
                        <input pattern="[A-Za-z- ]+"  minlength="4" maxlength="30" required 
                        title="Solo letras. Tamaño mínimo: 4 "type="text" id="NombreEncargado" class="form_input" placeholder=" " name="NombreEncargado" value="<?php echo $row2['NombreEncargado']  ?>" >
                        <label for="NombreEncargado" class="form_label" id="NombreEncargado">Nombre del encargado:</label>
                        <span class="form_line"></span>
                    </div> 
                 
                    <div class="form_group">
                        <input pattern="[A-Za-z- ]+"  minlength="4" maxlength="30" required 
                        title="Solo letras. Tamaño mínimo: 4 "type="number" id="TelefonoEncargado" class="form_input" placeholder=" " name="TelefonoEncargado" value="<?php echo $row2['TelefonoEncargado']  ?>">
                        <label for="TelefonoEncargado" class="form_label" id="TelefonoEncargado">Numero de telefono del encargado:</label>
                        <span class="form_line"></span>
                    </div> 
                 
                    <input type="submit" class="form_submit" value="Guardar">
                    <a style="color:blue" href="index.php"><~ Regresar</a>
                </div>
            </form>
        </div>
    </body>
</html>