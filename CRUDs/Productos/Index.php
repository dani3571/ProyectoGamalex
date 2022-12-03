<?php
include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/P.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Producto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/b.css">
        <script src="https://cdn.tailwindcss.com"></script>
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://code.jquery.com/ui/1.12.1/themes/ui-darkness/jquery-ui.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
    <script src="assets/swal2/sweetalert2.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Referencia a jspdf-->
    <script src="../jspdf/dist/jspdf.min.js"></script>
       <script src="../js/jspdf.plugin.autotable.min.js"></script>
    <style>
        .nuevo{
            margin-left: -600px;
        }
    </style>
    </head> 
    <body>
    <div class="header-container">
            
        </div>
      <!--Aqui debe estar el header-->
        <div class="main-container">
            <div class="titulo">
                <h1>Registro de Productos</h1>
            </div>
            <div class="formulario">
                <div class="crear">
                    <a class="link_crear" href="./CrearProducto.php">CREAR</a>
                    <a class="link_crear" href="./Reponer.php">Habilitar un producto</a>
                    <button style="margin-left:2px;" class="link_crear" id="GenerarReporte" class="btn btn-default">Reporte</button>
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
                           
                            <th>Categoria</th>
                            <th>Tipo De Unidad</th>
                            <th>Imagen</th>
                            <th></th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php
			
			require_once '../Laboratorios/dbcon.php';
            include("/xampp/htdocs/ProyectoGamalex/CRUDs/conexion.php");
			$query = "SELECT * FROM producto where Estado=1";
			$stmt = $DBcon->prepare($query);
			$stmt->execute();
            $db = conectar();
            $query2=$db->query("select * from producto");// $query2=$db->query("select Nombre,Cantidad,PrecioUnidad,PrecioTotalProducto,Descripcion,Estado,IdLaboratorio,NombreC,NombreU from producto");
            $laboratorio = array();//productos
          
            while($r=$query2->fetch_object()){$laboratorio[]=$r;}
			
			if($stmt->rowCount() > 0) {
				
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				?>
		
        <?php
                 $img=base64_encode($row['Imagen']);
           //      $imagen = base64_encode($datos ['Imagen']);
               ?>
               <tr>
		        <th><?php echo $IdProducto; ?></th>
                <th><?php echo $Nombre; ?></th>
                <th><?php echo $Cantidad; ?></th>
                <th><?php echo $PrecioUnidad; ?></th>
                <th><?php echo $PrecioTotalProducto; ?></th>
                <th><?php echo $Descripcion; ?></th>
                <th><?php echo $IdLaboratorio; ?></th>
                <th><?php echo $NombreC; ?></th>
                <th><?php echo $NombreU; ?></th>
                <th><img width= "100px" height="100px" class="img-responsive" src="data:$row[Imagen]/jpg;charset=utf8;base64,<?php echo $img ?>"/></th>
        
               
                <th><a class="link_editar" href="actualizarProducto.php?id=<?php echo $row['IdProducto'] ?>">Editar</a></th>
                <th><a class="link_eliminar" href="eliminarProducto.php?id=<?php echo $row['IdProducto'] ?>">Deshabilitar</a></th>
                <th><a class="link_editar" href="actualizarimagen.php?id=<?php echo $row['IdProducto'] ?>">imagen</a></th>
               
          
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
    <script>
     	$(document).ready(function(){
		$(document).on('click', '#delete_laboratory1', function(e){
			var IdProducto = $(this).data('IdProducto');
			alert(IdProducto);	
		//	$('#tabla').DataTable().ajax.reload();
			e.preventDefault();
		});
	});
	function SwalDelete(IdProducto){
		  Swal.fire({
			title: 'Estas seguro?',
			text: "Se borrará de forma permanente!",
			type: 'warning',
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
			       	data: 'delete='+IdProducto,
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
  pdf.text(20,20,"Reporte de Productos");
  pdf.text(11,11,"<?php echo "Fecha del reporte: ". date(" d/m/Y")?>");
  var columns = ["Nombre", "Cantidad", "PrecioUnidad", "PrecioTotalProducto","Estado","NombreC","NombreU"];
  var data = [
<?php foreach($laboratorio as $c):?>
 ["<?php echo $c->Nombre; ?>", "<?php echo $c->Cantidad; ?>", "<?php echo $c->PrecioUnidad; ?>", "<?php echo $c->PrecioTotalProducto; ?>","<?php  if($c->Estado == 0)
    echo $c->Estado="Inactivo";
  else
    echo $c->Estado= "Activo";
   ?>","<?php echo $c->NombreC; ?>","<?php echo $c->NombreU; ?>" ],
   
  
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
  pdf.save('ReporteProductos.pdf');

});
</script>
</html>

<?php
include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/S.php");
?>