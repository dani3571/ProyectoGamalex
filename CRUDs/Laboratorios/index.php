<?php
include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/P.php");
?>

<?php


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
<!--Referencia a jspdf-->
       <script src="../jspdf/dist/jspdf.min.js"></script>
       <script src="../js/jspdf.plugin.autotable.min.js"></script>

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
                <h1>Registro de Laboratorios</h1>
        </div>
        <!--
        <div class="estado">
            <ion-icon style="color:lightgreen" name="ellipse"></ion-icon> Activo &nbsp;&nbsp;&nbsp;<ion-icon style="color: red;" name="ellipse"></ion-icon> Inactivo<br>
        </div>
        -->
            <div class="formulario">
                <div class="crear">
                    <a class="link_crear" href="CrearLaboratorio.php">CREAR</a>
                    <a style="margin-left:2px;"class="link_crear" href="reponer.php">Reponer laboratorios</a>
                    <button style="margin-left:2px;" class="link_crear" id="GenerarReporte" class="btn btn-default">Reporte</button>
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
			include("/xampp/htdocs/ProyectoGamalex/CRUDs/conexion.php");
      $query = "SELECT * FROM Laboratorio where Estado=1";
			$stmt = $DBcon->prepare($query);
			$stmt->execute();

      $db = conectar();
      $query2=$db->query("select * from laboratorio");//cambiar select*from 
      $laboratorio = array();//productos
    
      while($r=$query2->fetch_object()){$laboratorio[]=$r;}

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
                <th><?php echo "Activo" ?></th>
                <td> 
              <th><a href="EditarLaboratorio.php?id=<?php echo $row['IdLaboratorio']?>" class="link_editar">Editar</a></th>
              <th><a style ="cursor :pointer"class="link_eliminar" id="delete_laboratory1" data-id="<?php echo $IdLaboratorio; ?>" >Eliminar</i></a>	</th>	
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
        </div>
<!--
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
-->    
</body>
    <script>
     	$(document).ready(function(){
		$(document).on('click', '#delete_laboratory1', function(e){
			var IdLaboratorio = $(this).data('id');
			SwalDelete(IdLaboratorio);	
		//	$('#tabla').DataTable().ajax.reload();
			e.preventDefault();
		});
	});
	function SwalDelete(IdLaboratorio){
		  Swal.fire({
			title: 'Estas seguro?',
			text: "El laboratorio cambiara a estado inactivo!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si, cambialo!',
			showLoaderOnConfirm: true,
			  
			preConfirm: function() {
			  return new Promise(function(resolve) {
			       
			     $.ajax({
			   		url: 'eliminar.php',
			    	type: 'POST',
			       	data: 'delete='+IdLaboratorio,
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

<script>
$("#GenerarReporte").click(function(){
  var pdf = new jsPDF();
  const fecha = new Date();
  pdf.text(20,20,"Reporte de Laboratorios");
  pdf.text(11,11,"<?php echo "Fecha del reporte: ". date(" d/m/Y")?>");
  var columns = ["Nombre", "Direccion", "Nombre Encargado", "Telefono", "Estado"];
  var data = [
<?php foreach($laboratorio as $c):?>
 ["<?php echo $c->Nombre; ?>", "<?php echo $c->Direccion; ?>", "<?php echo $c->NombreEncargado; ?>", "<?php echo $c->TelefonoEncargado; ?>", "<?php   
  if($c->Estado == 0)
    echo $c->Estado="Inactivo";
  else
    echo $c->Estado= "Activo";
   ?>"],
<?php endforeach; ?>  
  ];

  pdf.autoTable(columns,data,{ 
    margin:{ top: 25  },
    alternateRowStyles: {fillColor : [178, 227, 227]},
    halign: 'center',
    tableLineColor: [40, 84, 233  ], 
    tableLineWidth: 0.1,
    headStyles:{fillColor:[35, 35, 37]}
    
    
    }
  );
  pdf.save('ReporteLaboratorios.pdf');

});
</script>
</html>
    </div>


   <?php
  include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/S.php");
   ?>

