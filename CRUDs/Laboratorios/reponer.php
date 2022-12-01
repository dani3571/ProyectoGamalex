<?php
include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/P.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laboratorios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/newStyles.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://code.jquery.com/ui/1.12.1/themes/ui-darkness/jquery-ui.css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
       <style>
          .estado { 
           font-size: 20px;
           margin-left: 690px;
           margin-top: 1px;
           padding-top: 1px;
          }

       </style>
<div id="posicion">
</head> 
    <body>
    <div class="header-container">
            <?php
          
          //include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/header.php");
            ?>
        </div>
      <!--Aqui debe estar el header-->
        <div class="main-container">
            <div class="titulo">
                <h1>Cambio de estado de Laboratorios</h1>
            </div>
            <div class="estado">
            <ion-icon style="color:lightgreen" name="ellipse"></ion-icon> Activo &nbsp;&nbsp;&nbsp;<ion-icon style="color: red;" name="ellipse"></ion-icon> Inactivo<br>
             </div>
        
            <div class="formulario">
                <div class="crear">
                    <a class="link_crear" href="index.php"><~ Regresar</a>   
                    <th><a style ="cursor :pointer"class="link_eliminar" id="deletePermanentAll_laboratory">Eliminar Todo</i></a>	</th>	 
                </div>
                <table name= "table" id="table" class="tabla">
                    <thead>
                        <tr>
                            <th>IdLaboratorio</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Nombre del encargado</th>
                            <th>Numero de telefono</th>
                            <th>Estado</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
			
			require_once '../Laboratorios/dbcon.php';
			$query = "SELECT * FROM Laboratorio where Estado=0";
			$stmt = $DBcon->prepare($query);
			$stmt->execute();
			
			if($stmt->rowCount() > 0) {
				
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				?>
				<tr>
		        <th><?php echo $IdLaboratorio; ?></th>
                <th><?php echo $Nombre; ?></th>
                <th><?php echo $Direccion; ?></th>
                <th><?php echo $NombreEncargado; ?></th>
                <th><?php echo $TelefonoEncargado; ?></th>
                <th><ion-icon style="color:red" name="ellipse"></ion-icon></ion-icon></th>
                <td> 
              <th><a style ="cursor :pointer"class="link_editar" id="delete_laboratory1" data-id="<?php echo $IdLaboratorio; ?>" >Reponer</i></a>	</th>	
              <th><a style ="cursor :pointer"class="link_eliminar" id="deletePermanent_laboratory" data-id="<?php echo $IdLaboratorio; ?>" >Eliminar</i></a>	</th>	
            </td>
		        </tr>
				<?php
				}	
				
			} else {
				
				?>
		        <tr>
		        <td colspan="3">No hay laboratorios eliminados lista</td>
		        </tr>
		        <?php
				
			}
			?>
                    </tbody>
                </table>
            </div>
        </div>


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
    //Reponer laboratorios -- cambio de estado
    $(document).ready(function(){
		$(document).on('click', '#delete_laboratory1', function(e){
			var IdLaboratorio = $(this).data('id');
			SwalDelete(IdLaboratorio);	
		//	$('#tabla').DataTable().ajax.reload();
			e.preventDefault();
		});
	});
  //Eliminar laboratorio permanentemente
  $(document).ready(function(){
		$(document).on('click', '#deletePermanent_laboratory', function(e){
			var IdLaboratorio = $(this).data('id');
			SwalDeletePermanent(IdLaboratorio);	
		//	$('#tabla').DataTable().ajax.reload();
			e.preventDefault();
		});
	});
  //Eliminar todos los laboratorios inactivos
  $(document).ready(function(){
		$(document).on('click', '#deletePermanentAll_laboratory', function(e){
			SwalDeletePermanentAll();	
		//	$('#tabla').DataTable().ajax.reload();
			e.preventDefault();
		});
	});
	function SwalDelete(IdLaboratorio){
   Swal.fire({
		  	title: 'Estas seguro de reponer el laboratorio?',
			  text: "Se mostrara en la lista de laboratorios!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Si, reponlo!',
			  showLoaderOnConfirm: true,
			  
			 preConfirm: function() {
			  return new Promise(function(resolve) {  
			     $.ajax({
			   		url: 'ReponerLaboratorio.php',
			    	type: 'POST',
			       	data: 'delete='+IdLaboratorio,
			       	dataType: 'json'
			     })
			     .done(function(response){
			    
					Swal.fire(
                    'Laboratorio repuesto!', response.message, response.status,
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
   //Eliminar un laboratorio especifico permanentemente
   function SwalDeletePermanent(IdLaboratorio){
    Swal.fire({
		  	title: 'Estas seguro de eliminar permanentemente el laboratorio?',
			  text: "Se eliminara para siempre!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Si, bórralo!',
			  showLoaderOnConfirm: true,
			  
			 preConfirm: function() {
			  return new Promise(function(resolve) {  
			     $.ajax({
			   		url: 'deletePermanent.php',
			    	type: 'POST',
			       	data: 'delete='+IdLaboratorio,
			       	dataType: 'json'
			     })
			     .done(function(response){
			    
					Swal.fire(
                    'Laboratorio eliminado!', response.message, response.status,
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
   //Eliminar todos los laboratorios con estado = 0 
   function SwalDeletePermanentAll(){
   
    Swal.fire({
		  	title: 'Estas seguro de eliminar permanentemente todos los laboratorios?',
			  text: "Se eliminaran por siempre!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Si, bórralo!',
			  showLoaderOnConfirm: true,
			  
			 preConfirm: function() {
			  return new Promise(function(resolve) {  
			     $.ajax({
			   		url: 'deletePermanentAll.php',
			    	type: 'POST',
            data: datos
         
			      
             })
			     .done(function(response){
			    
					Swal.fire(
                    'Laboratorios inactivos eliminados!', 'a', 'asd',
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
    </div>


   <?php
  include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/S.php");
   ?>

