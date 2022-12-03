<?php
include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/P.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Producto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
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
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;

}
body{
    font-family: 'Roboto', sans-serif;
    background-color: #e5e5f7;
    background-image:  radial-gradient(#b234db 0.5px, transparent 0.5px), radial-gradient(#b234db 0.5px, #e5e5f7 0.5px);
    background-size: 20px 20px;
    background-position: 0 0,10px 10px;
    display: flex;
    flex-wrap: wrap;
}
.header-container{
    width: 100%;
}
.form {
    background-color: #fff;
    margin: auto;
    margin-top: 100px;
    margin-bottom: 100px;
    width: 100%;
    max-width: 400px;
    padding: 4.5em 3em;
    border-radius: 10px;
    box-shadow: 0 5px 10px -5px rgb(0, 0, 0 / 30%);
    text-align: center;
}
.form_title{
    font-size: 2rem;
    margin-bottom: .5em;
}
.form_paragraph{
    font-weight: 300;
}
.form_link {
    font-weight: 400;
    color: #000;
}
.form_container {
    margin-top: 3em;
    display: grid;
    gap: 2.5em;
}
.form_group {
    position: relative;
    --color: #5757577e;
}
.form_input {
    width: 100%;
    background: none;
    color: #706c6c;
    font-size: 1rem;
    padding: .6em .3em;
    border: none;
    outline: none;
    border-bottom: 1px solid var(--color);
    font-family: 'Roboto', sans-serif;  
}

.form_input:focus + .form_label{
    transform: translateY(-12px) scale(.7);
    transform-origin: left top;
    color: #3866f2;
} 
.form_input:not(:placeholder-shown) + .form_label{
    transform: translateY(-12px) scale(.7);
    transform-origin: left top;
    color: #3866f2;
}

.form_input:focus,
.form_input:not(:placeholder-shown){
    color: #4d4646;
}


.form_label {
    color: var(--color);
    cursor: pointer;
    position: absolute;
    top: 0;
    left: 5px;
    transform: translateY(10px);
    transition: transform .5s, color .3s;
}
h1 {
    text-align: center;
}
.main-container {
    background-color: #fff;
    margin: auto;
    margin-top: 1px;
    margin-left: 116px;
    width: 90%;
    max-width: 1850px;
    min-width: 1459px;
    padding: 4.5em 3em;
    border-radius: 10px;
    box-shadow: 0 5px 10px -5px rgb(0, 0, 0 / 30%);
    text-align: center;
    
    /*
    position: absolute;
    top: -30;
    right: 50px;
    */
}
.titulo {
    width: 100%;
    height: 100px;
    font-size: 40px;
}
.formulario {
    width: 100%;
    text-align: center;
}
.tabla{
    width: 100%;
    margin: 15px;
    
}
.tabla thead tr th{
    border-bottom: 1px solid black;
    padding: 10px;
    background-color: rgb(112, 252, 186);
    border-radius: 5px 5px 0px 0px;
}
.tabla tbody tr th{
    border-bottom: 1px solid rgb(190, 190, 190);
    padding: 20px;
}
.form_submit {
    background-color: rgb(0, 26, 255) !important; 
    color: rgb(255, 255, 255);
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    font-size: 1rem;
    padding: .8em 0;
    border: none;
    border-radius: .5em;
}

.form_line{
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 1px;
    background-color: #3866f2;
    transform: scale(0);
    transform: left bottom;
    transition: transform .4s;
}

.form_input:focus ~ .form_line,
.form_input:not(:placeholder-shown) ~ .form_line{
    transform: scale(1);
}

.link_editar{
    text-decoration: none;
    background: #38dcf2;
    color: #fff;
    font-family: 'Roboto', sans-serif;
    border-radius: .5em;
    padding: 14px;
}
  
.estado { 
    font-size: 20px;
    margin-left: 690px;
    margin-top: 1px;
    padding-top: 1px;
  }

.link_eliminar{
    text-decoration: none;
    background: #f24438;
    color: #fff;
    font-family: 'Roboto', sans-serif;
    border-radius: .5em;
    padding: 14px;
}
.crear {
    width: 100%;
    justify-content: start;
    text-align: start;
}
.link_crear {
    text-decoration: none;
    background-color: #383bf2;
    margin-left: 20px;
    padding: 14px;
    color: #fff;
    font-family: 'Roboto', sans-serif;
    border-radius: .5em;
    font-weight: bold;
}
@media (max-width:425px) {
    
    .form_title{
        font-size: 1.8rem;
    }
}


 
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
                    <a style="margin-left:2px;" class="link_crear" href="./Reponer.php">Habilitar un producto</a>
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