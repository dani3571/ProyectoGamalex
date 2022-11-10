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
             include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/header.php");
            ?>
        </div>
      <!--Aqui debe estar el header-->
        <div class="main-container">
            <div class="titulo">
                <h1>Registro de Productos</h1>
            </div>
            <div class="formulario">
                <div class="crear">
                    <a class="link_crear" href="./CrearProducto.php">CREAR</a>
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
                    <?php
			
			require_once '../Laboratorios/dbcon.php';
			$query = "SELECT * FROM producto where Estado=1";
			$stmt = $DBcon->prepare($query);
			$stmt->execute();
			
			if($stmt->rowCount() > 0) {
				
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				?>
				<tr>
		        <th><?php echo $IdProducto; ?></th>
                <th><?php echo $Nombre; ?></th>
                <th><?php echo $Cantidad; ?></th>
                <th><?php echo $PrecioUnidad; ?></th>
                <th><?php echo $PrecioTotalProducto; ?></th>
                <th><?php echo $Descripcion; ?></th>
                <th><?php echo $IdLaboratorio; ?></th>
                
           
              
                <th><a class="link_editar" href="actualizarProducto.php">Editar</a></th>
                <th><a class="link_eliminar" href="eliminar.php">Eliminar</a></th>
		        </tr>
				<?php
				}	
				
			} else {
				
				?>
		        <tr>
		        <td colspan="3">No hay plaboratorios en lista</td>
		        </tr>
		        <?php
				
			}
			?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>