<?php 
    include("../conexion.php");
    include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/P.php");
    $con=conectar();
    $sql="SELECT IdCompra,FechaCompra,PrecioTotalCompra,Estado,CantidadCompra FROM compra";
    
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Compras</title>
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

    <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
    </head> 
    <body>
        <div class="header-container">
            <?php
          //      include("../../EstructuraCuerpo/header.php");
            ?>
        </div>
        <div class="main-container">
            <div class="titulo">
                <h1>Registro de Compras</h1>
            </div>
            <div class="formulario">
                <div class="crear">
                    <a class="link_crear" href="CrearNuevaCompra.php">CREAR</a>
                </div>
                
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>NumeroCompra</th>
                            <th>FechaCompra</th>
                            <th>PrecioTotalCompra</th>
                            <th>CantidadCompra</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php
			
			require_once '../Laboratorios/dbcon.php';
			$query = "SELECT * FROM compra where Estado=1";
			$stmt = $DBcon->prepare($query);
			$stmt->execute();
			
			if($stmt->rowCount() > 0) {
				
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				?>
				<tr>
                <th><?php  echo $row['IdCompra']?></th>
                <th><?php  echo $row['FechaCompra']?></th>
                <th><?php  echo $row['PrecioTotalCompra']?></th>
                <th><?php  echo $row['CantidadCompra']?></th>
                <td> 
                <th><a href="detalleCompra.php?id=<?php echo $row['IdCompra'] ?>" class="link_editar">Detalle</a></th>
                <th><a style ="cursor :pointer"class="link_eliminar" id="delete_laboratory1" data-id="<?php echo $IdCompra; ?>" >Eliminar</i></a></th>		
			</td>
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
        
    </body>
    <template id="my-template">
        <swal-title>
        Save changes to "Untitled 1" before closing?
  </swal-title>
  <swal-icon type="warning" color="red"></swal-icon>
  <swal-button type="confirm">
    Save As
  </swal-button>
  <swal-button type="cancel">
    Cancel
  </swal-button>
  <swal-button type="deny">
    Close without Saving
  </swal-button>
  <swal-param name="allowEscapeKey" value="false" />
  <swal-param
    name="customClass"
    value='{ "popup": "my-popup" }' />
  <swal-function-param
    name="didOpen"
    value="popup => console.log(popup)" />
</template>
    </body>
    <script>
     	$(document).ready(function(){
		$(document).on('click', '#delete_laboratory1', function(e){
			var IdCompra = $(this).data('id');
			SwalDelete(IdCompra);	
            
		//	$('#tabla').DataTable().ajax.reload();
			e.preventDefault();
		});
	});
	function SwalDelete(IdCompra){
		  Swal.fire({
			title: 'Estas seguro?',
			text: "Se borrará de forma permanente!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si, bórralo!',
			showLoaderOnConfirm: true,
			  
			preConfirm: function() {
			  return new Promise(function(resolve) {
			       
			     $.ajax({
			   		url: 'eliminar2.php',
			    	type: 'POST',
			       	data: 'delete='+IdCompra,
			       	dataType: 'json'
			     })
			     .done(function(response){
			    
					Swal.fire(
                    'Eliminado!', response.message, response.status,
                   ).then(function () {		
                    location.reload();
                    //$("#table").data.ajax.reload();
                  })
			    
				 })
			     .fail(function(){
					Swal.fire('Oops...', 'Algo salió mal!', 'error');
			     });
			  });
		    },
			allowOutsideClick: false			  
		});	

	}
 </script>
</html>
<?php
include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/S.php");
?>