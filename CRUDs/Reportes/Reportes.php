<?php
include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/P.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laboratorios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        
      
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
    margin-top: 10px;
    margin-left: 180px;
    width: 90%;
    max-width: 1150px;
    min-width: 1000px;
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

#selec{
   position: absolute;
   left: 400px;top: 90px;
   z-index: 2;
}
#pos2{
    position: absolute;
    left: 850px;
    top: 90px;
}
</style>
    </head> 
<script>
    function seleccionarReporte(){
      let reporte = document.getElementById('reporte');
      let op = reporte.value;
      var x = document.getElementById("table");
      var d = document.getElementById("dias").value;
      var m = document.getElementById("mes").value;
      var a = document.getElementById("año").value;
     // document.getElementById('seleccion').innerText = `Ud. ha seleccionado el lenguaje ${op}.`;
     /*
     if( document.getElementById('seleccion').innerText = `Ud. ha seleccionado el lenguaje ${op}.`){
         x.style.display = "none";
      }
      */
    
      if(document.getElementById('reporte').value == d){
        document.getElementById("table2").style.display = "none";
        document.getElementById("table3").style.display = "none";
        document.getElementById("table").style.display = "table";
        document.getElementById("reporteg1").style.display = "block"    
        document.getElementById("reporteg2").style.display = "none" 
        document.getElementById("reporteg3").style.display = "none"   
      }
      if(document.getElementById('reporte').value == m){
         x.style.display = "none";
         document.getElementById("table3").style.display = "none";
         document.getElementById("reporteg2").style.display = "block"
         document.getElementById("reporteg1").style.display = "none"
         document.getElementById("reporteg3").style.display = "none"        
         document.getElementById("table2").style.display = "table"; 
         
       }
       if(document.getElementById('reporte').value == a){
         x.style.display = "none";
         document.getElementById("table2").style.display = "none";     
         document.getElementById("table3").style.display = "table"; 
         document.getElementById("reporteg1").style.display = "none"
         document.getElementById("reporteg2").style.display = "none" 
         document.getElementById("reporteg3").style.display = "block"              
       }
    }

</script>

    <body>
       <br>
    <div id="selec">
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione una opcion</label>
    <select onchange="seleccionarReporte();" id="reporte" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option selected id="dias" value="dias">Reporte del dia</option>
      <option id="mes" value="mes">Reporte del mes</option>
      <option id="año" value="año">Reporte del año</option>
    </select>
   
    </div>

        <div class="main-container">
      
            <div class="titulo">
           
            </div>
            <div class="formulario">
                <table name= "table" id="table" class="tabla">
                    <thead>
                        <tr>
                            <th>NOMBRE MEDICAMENTO</th>
                            <th>CANTIDAD VENDIDA</th>
                            <th>GANANCIA</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                    <?php
			
            require_once '/xampp/htdocs/ProyectoGamalex/CRUDs/Laboratorios/dbcon.php';
		   //Todas las ventas del dia actual
            $query = "SELECT b.Nombre, SUM(c.Cantidad) as Cantidad , SUM(c.Cantidad * b.PrecioUnidad) AS Ganancia FROM `detalleventa` a INNER JOIN producto b on a.IdProducto = b.IdProducto INNER JOIN venta c on a.IdVenta = c.IdVenta WHERE c.FechaVenta = DATE(NOW()) GROUP BY b.nombre ";
		
            $stmt = $DBcon->prepare($query);
			$stmt->execute();
			
			if($stmt->rowCount() > 0) {
				
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				?>
				<tr>
		        
                <th><?php echo $Nombre; ?></th>
                <th><?php echo $Cantidad; ?></th>
                <th><?php echo $Ganancia; ?></th>
                <td> 
         	</td>
		        </tr>
				<?php
				}	
				
			} else {
				
				?>
		        <tr>
		        <td colspan="3">No hay reportes que mostrar por ahora</td>
		        </tr>
		        <?php
				
			}
			?>
                    </tbody>
                    
                </table>
                <?php
			include("/xampp/htdocs/ProyectoGamalex/CRUDs/conexion.php");
            $con = conectar();
            require_once '/xampp/htdocs/ProyectoGamalex/CRUDs/Laboratorios/dbcon.php';
          ?>
        <div id="reporteg1">
            <h1 style="font-size: 20px; ">Cantidad total de productos vendidos: <?php 
                       $query = "SELECT b.Nombre, SUM(c.Cantidad) as Cantidad FROM `detalleventa` a INNER JOIN producto b on a.IdProducto = b.IdProducto INNER JOIN venta c on a.IdVenta = c.IdVenta WHERE c.FechaVenta = DATE(NOW())";
                       $ex = mysqli_query($con,$query);
                       $row = mysqli_fetch_array($ex);
                       echo $row["Cantidad"];
                       ?>
                  </h1>        
            <h1 style="font-size: 20px;" >Ganancia total: <?php 
                    $query3 = "SELECT SUM(c.Cantidad * b.PrecioUnidad) as suma FROM `detalleventa` a INNER JOIN producto b on a.IdProducto = b.IdProducto INNER JOIN venta c on a.IdVenta = c.IdVenta where c.FechaVenta = DATE(NOW());";
                    $ex = mysqli_query($con,$query3);
                    $row = mysqli_fetch_array($ex);
                     if($row["suma"] == 0){
                        echo 0 . " Bs";
                     }else{
                        echo $row["suma"].    "   Bs";
                     }
                  ?> </h1>
        </div>
            </div>
            

          

   <!--Tabla 2-->
  <div id="pos2">
        <h3>Fecha y hora del reporte: <?php 
                 /*   $query2 = "SELECT COUNT(IdVenta) as fecha FROM venta where Estado = 1  and FechaVenta = DATE(NOW())";
                    $ex = mysqli_query($con,$query2);
                    $row = mysqli_fetch_array($ex);
                    echo $row["fecha"];*/
                    echo date(" d/m/Y   -  h:i:s A");
                  ?>
         </h3>
    </div>
   <div class="formulario">
                <table style="display: none;" name= "table2" id="table2" class="tabla">
                    <thead>
                        <tr>
                            <th>NOMBRE MEDICAMENTOa</th>
                            <th>CANTIDAD VENDIDA</th>
                            <th>GANANCIA</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                    <?php
			
            require_once '/xampp/htdocs/ProyectoGamalex/CRUDs/Laboratorios/dbcon.php';
		   //Todas las ventas del mes actual
            $query = "SELECT b.Nombre, SUM(c.Cantidad) as Cantidad , SUM(c.Cantidad * b.PrecioUnidad) AS Ganancia FROM `detalleventa` a INNER JOIN producto b on a.IdProducto = b.IdProducto INNER JOIN venta c on a.IdVenta = c.IdVenta WHERE MONTH(c.FechaVenta) = MONTH(CURRENT_DATE()) and c.Estado = 1 GROUP BY b.nombre";
		
            $stmt = $DBcon->prepare($query);
			$stmt->execute();
			
			if($stmt->rowCount() > 0) {
				
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				?>
				<tr>
		        
                <th><?php echo $Nombre; ?></th>
                <th><?php echo $Cantidad; ?></th>
                <th><?php echo $Ganancia; ?></th>
                <td> 
         	</td>
		        </tr>
				<?php
				}	
				
			} else {
				
				?>
		        <tr>
		        <td colspan="3">No hay reportes que mostrar por ahora</td>
		        </tr>
		        <?php
				
			}
			?>
                    </tbody>


                    
                </table>
            </div>
            <div id="reporteg2" style="display: none;">
            <h1 style="font-size: 20px; ">Cantidad total de productos vendidos: <?php 
                       $query = "SELECT b.Nombre, SUM(c.Cantidad) as Cantidad FROM `detalleventa` a INNER JOIN producto b on a.IdProducto = b.IdProducto INNER JOIN venta c on a.IdVenta = c.IdVenta where MONTH(c.FechaVenta) = MONTH(CURRENT_DATE())";
                       $ex = mysqli_query($con,$query);
                       $row = mysqli_fetch_array($ex);
                       echo $row["Cantidad"];
                       ?>
                  </h1>        
            <h1 style="font-size: 20px;" >Ganancia total: <?php 
                    $query3 = "SELECT SUM(c.Cantidad * b.PrecioUnidad) as suma FROM `detalleventa` a INNER JOIN producto b on a.IdProducto = b.IdProducto INNER JOIN venta c on a.IdVenta = c.IdVenta where MONTH(c.FechaVenta) = MONTH(CURRENT_DATE())";
                    $ex = mysqli_query($con,$query3);
                    $row = mysqli_fetch_array($ex);
                     if($row["suma"] == 0){
                        echo 0 . " Bs";
                     }else{
                        echo $row["suma"].    "   Bs";
                     }
                  ?> </h1>
        </div>
        
<!--tabla 3-->

          <div class="formulario">
                <table style="display: none;" name= "table3" id="table3" class="tabla">
                    <thead>
                        <tr>
                            <th>Fecha venta</th>
                            <th>NOMBRE MEDICAMENTO</th>
                            <th>CANTIDAD VENDIDA</th>
                            <th>GANANCIA</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                    <?php
			
            require_once '/xampp/htdocs/ProyectoGamalex/CRUDs/Laboratorios/dbcon.php';
		   //Todas las ventas del año actual
            $query = "SELECT c.FechaVenta, b.Nombre, SUM(c.Cantidad) as Cantidad , SUM(c.Cantidad * b.PrecioUnidad) AS Ganancia FROM `detalleventa` a INNER JOIN producto b on a.IdProducto = b.IdProducto INNER JOIN venta c on a.IdVenta = c.IdVenta WHERE YEAR(c.FechaVenta) = YEAR(CURRENT_DATE()) and c.Estado = 1 GROUP BY b.nombre";
		
            $stmt = $DBcon->prepare($query);
			$stmt->execute();
			
			if($stmt->rowCount() > 0) {
				
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				?>
				<tr>
                <th><?php echo $FechaVenta; ?></th>
                <th><?php echo $Nombre; ?></th>
                <th><?php echo $Cantidad; ?></th>
                <th><?php echo $Ganancia; ?></th>
                <td> 
         	</td>
		        </tr>
				<?php
				}	
				
			} else {
				
				?>
		        <tr>
		        <td colspan="3">No hay reportes que mostrar por ahora</td>
		        </tr>
		        <?php
				
			}
			?>
                    </tbody>
                </table>
            </div>
            <div id="reporteg3" style="display: none;">
            <h1 style="font-size: 20px; ">Cantidad total de productos vendidos: <?php 
                       $query = "SELECT b.Nombre, SUM(c.Cantidad) as Cantidad FROM `detalleventa` a INNER JOIN producto b on a.IdProducto = b.IdProducto INNER JOIN venta c on a.IdVenta = c.IdVenta where YEAR(c.FechaVenta) = YEAR(CURRENT_DATE())";
                       $ex = mysqli_query($con,$query);
                       $row = mysqli_fetch_array($ex);
                       echo $row["Cantidad"];
                       ?>
                  </h1>        
            <h1 style="font-size: 20px;" >Ganancia total: <?php 
                    $query3 = "SELECT SUM(c.Cantidad * b.PrecioUnidad) as suma FROM `detalleventa` a INNER JOIN producto b on a.IdProducto = b.IdProducto INNER JOIN venta c on a.IdVenta = c.IdVenta where YEAR(c.FechaVenta) = YEAR(CURRENT_DATE())";
                    $ex = mysqli_query($con,$query3);
                    $row = mysqli_fetch_array($ex);
                     if($row["suma"] == 0){
                        echo 0 . " Bs";
                     }else{
                        echo $row["suma"].    "   Bs";
                     }
                  ?> </h1>
        </div>















        
   
    </body>

    </html>

<?php
include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/S.php");
?>