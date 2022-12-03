
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Crear Producto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
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
    margin-top: 100px;
    width: 90%;
    max-width: 1150px;
    min-width: 800px;
    padding: 4.5em 3em;
    border-radius: 10px;
    box-shadow: 0 5px 10px -5px rgb(0, 0, 0 / 30%);
    text-align: center;
    position: absolute;
    top: -30;
    right: 50px;
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
    <?php  
    
    include("../conexion.php");
    $con=conectar();
    $sql4 = "SELECT * FROM laboratorio";
    $query4 = mysqli_query($con,$sql4);
    $sql5 = "SELECT * FROM categoria";
    $query5 = mysqli_query($con,$sql5); 
    $sql6 = "SELECT * FROM unidades";
    $query6 = mysqli_query($con,$sql6); 
    ?>
    <body>
    <div class="header-container">
            <?php
                include("../../EstructuraCuerpo/header.php");
            ?>
        </div>
    
        <div class="form">
            <form action="./insertarProducto.php" method="POST" enctype="multipart/form-data">
                <h2 class="form_title">Ingrese datos del Producto</h2>
                <div class="form_container">
                    <div class="form_group">
                        <input type="text" id="Nombre" class="form_input" placeholder=" " name="Nombre" required  >
                        <label for="Nombre" class="form_label">Nombre:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_group">
                        <input type="number" id="Cantidad" class="form_input" placeholder=" " name="Cantidad"  oninput="calculate()" min="1"   required>
                        <label for="Cantidad" class="form_label">Cantidad:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_group">
                        <input  type="number" id="PrecioUnidad" class="form_input" placeholder=" " name="PrecioUnidad" oninput="calculate()" min="1"  required >
                        <label for="PrecioUnidad" class="form_label">Precio Unidad:</label>
                        <span class="form_line"></span>
                    </div>
                        
                    <div class="form_group">
                        <input type="text" id="PrecioTotalProducto" class="form_input" placeholder=" " name="PrecioTotalProducto" readonly required >
                        <label for="PrecioTotal" class="form_label">Precio total:</label>
                        <span class="form_line"></span>
                    </div>
                   
                    <div class="form_group">
                        <input type="text" id="Descripcion" class="form_input" placeholder=" " name="Descripcion" >
                        <label for="Descripcion" class="form_label">Descripcion:</label>
                        <span class="form_line"></span>
                    </div>
                   <!-- <div class="form_group">
                        <input type="text" id="Laboratorio" class="form_input" placeholder=" " name="IdLaboratorio" >
                        <label for="Laboratorio" class="form_label">Laboratorio:</label>
                        <span class="form_line"></span>
                    </div>--> 
                    <div class="form_group">
                                <select id="IdLaboratorio" class="form_input" name="IdLaboratorio">
                                    <option>--Seleccione el laboratotio--</option>
                                    <?php
                                        while($productos = mysqli_fetch_array($query4)){
                                    ?>
                                        <option><?php  echo $productos['Nombre']?> </option>   
                                        <option><?php  echo $productos['IdLaboratorio']?> </option> 
                                    <?php 
                                        }
                                    ?> 
                                </select>
                                <label for="Productos" class="form_label">IdLaboratorio:</label>
                            </div>
                            <div class="form_group">
                        
                    </div>
                     <!--Listado Categorias -->                   
                    <div class="form_group">
                                <select id="NombreC" class="form_input" name="NombreC">
                                    <option>--Seleccione el Nombre--</option>
                                    <?php
                                        while($categoria = mysqli_fetch_array($query5)){
                                    ?>
                                        <option><?php  echo $categoria['NombreC']?> </option>   
                                       
                                    <?php 
                                        }
                                    ?> 
                                </select>
                                <label for="Productos" class="form_label">Categoria:</label>
                            </div>
                            <div class="form_group">
                        <input type="date" id="Vencimiento" class="form_input" placeholder=" " name="Vencimiento" >
                        <label for="Vencimiento" class="form_label">fechaVencimiento:</label>
                        <span class="form_line"></span>
                    </div>

                     <!--Listado unidades -->  
                     <div class="form_group">
                                <select id="NombreU" class="form_input" name="NombreU">
                                    <option>--Seleccione el Nombre del tipo de unidad--</option>
                                    <?php
                                        while($categoria = mysqli_fetch_array($query6)){
                                    ?>
                                        <option><?php  echo $categoria['NombreU']?> </option>   
                                       
                                    <?php 
                                        }
                                    ?> 
                                </select>
                                <label for="Productos" class="form_label">Tipo Unidad:</label>
                            </div>
                            <div class="form_group">
                                    </div>
                            <div  class="from"  >
       
              <input type="file" accept="image/jpeg" name="Imagen"/>
        </div>
                            
              <input class = "form_submit" type="submit" onclick="return foo();"  value="Guardar"  >
              <a style="color:blue" href="index.php"><~ Regresar</a>
            </div>
            </form>
    </body>
    
</html>
<!--Codigo para calcular el precio total del producto -->

<script>try {function calculate() {
var myBox1 = document.getElementById('Cantidad').value; 
var myBox2 = document.getElementById('PrecioUnidad').value;
var result = document.getElementById('PrecioTotalProducto'); 
var myResult = myBox1 * myBox2;
result.value = myResult;


}
} catch (error) { throw error; }
/*function validarDatos(){
    var Nombre=document.getElementById('Nombre').value; 
    var Cantidad=document.getElementById('Cantidad').value; 
    var PrecioUnidad=document.getElementById('PrecioUnidad').value; 
    var PrecioTotal=document.getElementById('PrecioTotal').value;
    if(Nombre==null|| Cantidad==null||PrecioUnidad==null||,PrecioTotal==null){
        alert("Tienes que llenar todos los datos ")
    } 
    
}*/

</script>
<script>
   function foo() {
   alert("Datos Correctos");
   return true;
}
</script>
