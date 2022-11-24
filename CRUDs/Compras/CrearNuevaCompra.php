<?php 
    include("../conexion.php");
    $con=conectar();
    $sql1="SELECT Max(IdCompra) as IdCompra FROM compra";
    $query1=mysqli_query($con,$sql1);
    $numeroCompra=mysqli_fetch_array($query1);

    $sql2 = "SELECT * FROM producto";
    $query2 = mysqli_query($con,$sql2);
    $sql3 = "SELECT * FROM producto";
    $query3 = mysqli_query($con,$sql3); 
    $sql4 = "SELECT * FROM producto";
    $query4 = mysqli_query($con,$sql4); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laboratorios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-wievento_formulariodth, initial-scale=1">
        <link rel="stylesheet" href="../css/estilosCrudVentas.css">
        <link rel="stylesheet" href="../css/header.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdn.tailwindcss.com"></script>     
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
       <script>
            $(document).ready(
                function(){
                    
                    const tiempoTranscurrido = Date.now();
                    const hoy = new Date(tiempoTranscurrido);
                    document.getElementById('Fecha').value = hoy.toLocaleDateString().replace("/","-").replace("/","-").split('-').reverse().join('-');
                }
            );
            $(document).on('submit','#evento_formulario',function(event){
                event.preventDefault();
                let tblDatos = document.getElementById('tablaContenido').children;
                var idCompra = document.getElementById('numeroCompra').value;
                var fechaCompra = document.getElementById('Fecha').value;
                var cantidad = parseInt(document.getElementById('CantidadTotal').innerHTML);
                var total = parseFloat(document.getElementById('Total').innerHTML);
                $.ajax({
                        url: "insertarNuevaCompra.php",
                        method: "post",
                        data: {IdCompra: idCompra, FechaCompra : fechaCompra, Cantidad: cantidad, Total: total}
                })
                for (var i = 0; i < tblDatos.length; i++) {
                    var idCompra = document.getElementById('numeroCompra').value;
                    var idProducto = tblDatos[i].children[0].innerHTML;
                  
                    var cantidad = tblDatos[i].children[3].innerHTML;
                   
                    $.ajax({
                        url: "insertarDetalleCompra.php",
                        method: "post",
                        data: {IdCompra: idCompra, IdProducto : idProducto, Cantidad: cantidad}
                    })
                }
                document.getElementById('Total').innerHTML = 0;
                document.getElementById('Productos').selectedIndex = 0;
                document.getElementById('CantidadDisponible').selectedIndex = 0;
                document.getElementById('PrecioIndividual').selectedIndex = 0;
                document.getElementById('Cantidad').selectedIndex = 0;
            });
            $(document).ready(
                function funcionInicial(){
                    let contador = 0;
                    $('#aumentarFila').click(
                        function(){
                            if(document.getElementById('Productos').selectedIndex!=0)
                            {
                                if(document.getElementById('Cantidad').value.toString().trim()==null||document.getElementById('Cantidad').value.toString().trim()==0)
                                {
                                    alert("Introduzca una cantidad válida");
                                }
                                else
                                {
                                    let tblDatos = document.getElementById('tablaContenido').insertRow(contador);
                                    contador++;
                                    console.log(contador);
                                    let IdProducto = tblDatos.insertCell(0);
                                    let Productos = tblDatos.insertCell(1);
                                    let Precio = tblDatos.insertCell(2);
                                    let Cantidad = tblDatos.insertCell(3);
                                    let PrecioTotal = tblDatos.insertCell(4);
                                    let Eliminar = tblDatos.insertCell(5);
                                    IdProducto.innerHTML = document.getElementById('IdProducto').value;
                                    Productos.innerHTML = document.getElementById('Productos').value;
                                    Precio.innerHTML = document.getElementById('PrecioIndividual').value;
                                    Cantidad.innerHTML = document.getElementById('Cantidad').value;
                                    PrecioTotal.innerHTML = document.getElementById('PrecioTotal').value;
                                    Eliminar.classList.add('link_eliminar')
                                    Eliminar.innerHTML = "Eliminar";
                                    document.getElementById('Total').innerHTML = (parseFloat(document.getElementById('Total').innerHTML) + parseFloat(document.getElementById('PrecioTotal').value)).toString();
                                    document.getElementById('CantidadTotal').innerHTML = (parseFloat(document.getElementById('CantidadTotal').innerHTML) + parseFloat(document.getElementById('Cantidad').value)).toString();
                                }
                            }
                            else
                            {
                                alert("Seleccione un producto");
                            }
                        }
                    ),
                    $('#Productos').change(
                        function(){
                            document.getElementById('CantidadDisponible').selectedIndex = document.getElementById('Productos').selectedIndex;
                            document.getElementById('PrecioIndividual').selectedIndex = document.getElementById('Productos').selectedIndex;
                        }
                    ),
                    $('#Cantidad').change(
                        function(){
                            if(document.getElementById('Cantidad').value.toString().trim()==null||document.getElementById('Cantidad').value==0)
                            {
                                document.getElementById('PrecioTotal').value = 0;
                            }
                            else
                            {
                                document.getElementById('PrecioTotal').value  = document.getElementById('PrecioIndividual').value * document.getElementById('Cantidad').value;
                            }
                        }
                    ),
                    $('#Cantidad').on('input',

                    function(){
                    
                        if(document.getElementById('Cantidad').value.toString().trim()==null||document.getElementById('Cantidad').value==0)
                    
                        {
                    
                            document.getElementById('PrecioTotal').value = 0;
                    
                        }
                    
                        else
                    
                        {
                    
                            document.getElementById('PrecioTotal').value  = document.getElementById('PrecioIndividual').value * document.getElementById('Cantidad').value;
                    
                        }
                    
                    }
                    
                    ),
                    $("body").on('click',".link_eliminar",function(){
                        console.log($(this).parent().index());
                        document.getElementById('Total').innerHTML = (parseFloat(document.getElementById('Total').innerHTML) + document.getElementById('tablaContenido').children[$(this).parent().index()].children[4].innerHTML).toString();
                        document.getElementById('CantidadTotal').innerHTML = (parseFloat(document.getElementById('CantidadTotal').innerHTML) + document.getElementById('tablaContenido').children[$(this).parent().index()].children[3].innerHTML).toString();
                        $(this).parent().remove();
                        contador--;
                    })
                    
                }
            );
        </script>
    </head>
    <body>
    <div class="header-container">
            <?php
                include("../../EstructuraCuerpo/header.php");
            ?>
        </div>
        <div class="form">
            <div class="datos_venta_container">
                <h2 class="form_title">Ingrese datos de la Compra</h2>
                <div class="main_forms_container">
                    <div class="columns_container">
                        <div class="form_container">
                            <div class="form_group">
                                <input type="text" id="Fecha" class="form_input" placeholder=" " name="Fecha" readonly>
                                <label for="Fecha" class="form_label">Fecha:</label>
                            </div>
                            <div class="form_group">
                                <select id="Productos" class="form_input" name="Productos">
                                    <option>--Seleccione un producto--</option>
                                    <?php
                                        while($productos = mysqli_fetch_array($query4)){
                                    ?>
                                        <option><?php  echo $productos['Nombre']?> </option>   
                                    <?php 
                                        }
                                    ?> 
                                </select>
                                <label for="Productos" class="form_label">Producto:</label>
                            </div>
                            <div class="form_group">
                                <select id="PrecioIndividual" class="form_input" name="PrecioIndividual" disabled>
                                    <option>-----</option>
                                    <?php
                                        while($productos = mysqli_fetch_array($query2)){
                                    ?>
                                        <option><?php  echo $productos['PrecioUnidad']?> </option>   
                                    <?php 
                                        }
                                    ?>
                                </select>
                                <label for="PrecioIndividual" class="form_label">Precio individual:</label>
                            </div>
                            <div class="form_group">
                                <input type="number" id="Cantidad" class="form_input" placeholder=" " value="0" min="0" name="Cantidad">
                                <label for="Cantidad" class="form_label">Cantidad:</label>
                                <span class="form_line"></span>
                            </div>
                        </div>
                        <div class="form_container">
                            <div class="form_group">
                                <input type="text" id="IdProducto" class="form_input" placeholder=" " value="1" name="IdProducto" readonly>
                                <label for="IdProducto" class="form_label">Id Producto:</label>
                                <span class="form_line"></span>
                            </div>
                            <div class="form_group">
                                <select id="CantidadDisponible" class="form_input" name="CantidadDisponible" disabled>
                                    <option>-----</option>
                                    <?php
                                        while($productos = mysqli_fetch_array($query3)){
                                    ?>
                                        <option><?php  echo $productos['Cantidad']?> </option>   
                                    <?php 
                                        }
                                    ?>
                                    <!--<option>-----</option>
                                    <option>40</option>
                                    <option>20</option>
                                    <option>13</option>-->
                                </select>
                                <label for="CantidadDisponible" class="form_label">Cantidad disponible:</label>
                            </div>
                            <div class="form_group">
                                <input type="number" id="PrecioTotal" class="form_input" placeholder=" " value = "0" min="0" name="PrecioTotal"  readonly >
                                <label for="PrecioTotal" class="form_label">Precio total:</label>
                                <span class="form_line"></span>
                            </div>
                            
                            <div class="form_group">
                                <input type="number" id="numeroCompra" class="form_input" placeholder=" " value="<?php echo $numeroCompra['IdCompra']+1 ?>" min="0" name="numeroCompra" readonly>
                                <label for="numeroCompra" class="form_label">Numero de compra:</label>
                                <span class="form_line"></span>
                            </div>
                        </div>
                        <input id="aumentarFila" type="submit" class="form_submit" value="Agregar">
                    </div>
                </div>
                
            </div>
            
            
            <div class="table_container">
                <div class="table-wrapper">
                    <table id="tblDatos" class="tabla">
                        <thead>
                            <th>IdCompra</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th></th>
                        </thead>
                        <tbody id = "tablaContenido">
                        </tbody>
                    </table>
                </div>
            <script>
               
                </script>
               <div class="Total">
                    <h3>Total Compra precio:</h3>
                    &nbsp;
                    <h3  id="Total">0</h3>
                    <span></span>
                    <h3>Total Cantidad:</h3>
                    &nbsp;
                    <h3 id="CantidadTotal" >0</h3>

                    <form style="display: inline;" id="evento_formulario">
                        <input id="TerminarCompra" type="submit" class="form_submit" value="Terminar compra">
                    </form>
                </div>
            </div>
            
        </div>
    </body>
</html>
