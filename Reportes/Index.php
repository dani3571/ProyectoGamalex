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
    margin-top: 80px;
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

</style>
    </head> 

    <body>
        
      <!--Aqui debe estar el header-->

        <div class="main-container">
            
            <div class="titulo">
                
                <h1>Reportes del dia 26/11/2022</h1>
            </div>
            <div class="formulario">
                <div class="crear">
                    <a class="link_crear" href="CrearLaboratorio.php">CREAR</a>
                </div>
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
			$query = "SELECT b.Nombre, SUM(c.Cantidad) as Cantidad , SUM(c.Cantidad * b.PrecioUnidad) AS Ganancia FROM `detalleventa` a INNER JOIN producto b on a.IdProducto = b.IdProducto INNER JOIN venta c on a.IdVenta = c.IdVenta  GROUP BY b.nombre";
		
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
    
    </body>

    </html>

<?php
include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/S.php");
?>