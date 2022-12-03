<?php
include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/P.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tipos de unidades</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/newStyles.css">
        <script src="https://cdn.tailwindcss.com"></script>
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://code.jquery.com/ui/1.12.1/themes/ui-darkness/jquery-ui.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
    <script src="assets/swal2/sweetalert2.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head> 
    <body>
    <div class="header-container">
            
        </div>
      <!--Aqui debe estar el header-->
        <div class="main-container">
            <div class="titulo">
                <h1>Listado Unidades</h1>
            </div>
            <div class="formulario">
                <div class="crear">
                    <a class="link_crear" href="./CrearCategoria.php">CREAR</a>
                </div>
                <table class="tabla">
                    <thead>
                        <tr>
                        <th>Id Tipo Unidad</th>
                            <th>Nombre del tipo de unidad</th>
                            
                        <th></th>
                            <th></th>
                            

                        </tr>
                    </thead>
                    <tbody>
                    <?php
			
			require_once '../Laboratorios/dbcon.php';
			$query = "SELECT * FROM unidades where Estado=1";
			$stmt = $DBcon->prepare($query);
			$stmt->execute();
			
			if($stmt->rowCount() > 0) {
				
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				?>
		
        <?php
               //  $img=base64_encode($row['Imagen']);
           //      $imagen = base64_encode($datos ['Imagen']);
               ?>
               <tr>
		        <th><?php echo $IdUnidad; ?></th>
                <th><?php echo $NombreU; ?></th>
               
                
        
               
                <th><a class="link_editar" href="actualizarCategoria.php?id=<?php echo $row['IdUnidad'] ?>">Editar</a></th>
                <th><a class="link_eliminar" href="eliminarProducto.php?id=<?php echo $row['IdUnidad'] ?>">Deshabilitar</a></th>
          
		        </tr>
				<?php
				}	
				
			} else {
				
				?>
		        <tr>
		        <td colspan="3">No hay unidades en la lista </td>
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

<?php
include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/S.php");
?>