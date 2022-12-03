<?php 
    include("../conexion.php");
    $con=conectar();
    $sql1="SELECT Max(IdVenta) as IdVenta FROM venta";
    $query1=mysqli_query($con,$sql1);
    $numeroVenta=mysqli_fetch_array($query1);

    $sql2 = "SELECT * FROM producto where Estado = 1";
    $query2 = mysqli_query($con,$sql2);
    $sql3 = "SELECT * FROM producto where Estado = 1";
    $query3 = mysqli_query($con,$sql3); 
    $sql4 = "SELECT * FROM producto where Estado = 1";
    $query4 = mysqli_query($con,$sql4);
    
    $sql5 = "SELECT * FROM producto where Estado = 1";
    $query5 = mysqli_query($con,$sql5);
                 
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://code.jquery.com/ui/1.12.1/themes/ui-darkness/jquery-ui.css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
		    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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
        <script>
            function sumarCantidad(){
                let tablaDatos = document.getElementById('tablaContenido').children;
                var cantidades = 0;
                for (var p = 0; p < tablaDatos.length; p++) {
                    cantidades += tblDatos[i].children[3].innerHTML;
                }
                return cantidades;
            }
        </script>
       <script>
            $(document).ready(
                function(){
                    let contador = 0;
                    const tiempoTranscurrido = Date.now();
                    const hoy = new Date(tiempoTranscurrido);
                    document.getElementById('Fecha').value = hoy.toLocaleDateString().replace("/","-").replace("/","-").split('-').reverse().join('-');
                }
            );
            $(document).on('submit','#evento_formulario',function(event){
                event.preventDefault();
                if(contador!=0)
                {

                
                let nit = document.getElementById('NIT').value.toString();
                let apellido = document.getElementById('Apellido').value;
                if(nit!=0&&apellido!="")
                {
                    $.ajax({
                    url: "insertarCliente.php",
                    method: "post",
                    data: {NIT : nit, Apellido: apellido}
                    })
                }
                let tblDatos = document.getElementById('tablaContenido').children;
                var fechaVenta = document.getElementById('Fecha').value;
                var cantidadTotal = parseInt(document.getElementById('cantidadSumada').value);
                $.ajax({
                        url: "insertarNuevaVenta.php",
                        method: "post",
                        data: {FechaVenta : fechaVenta, Cantidad: cantidadTotal}
                })
                for (var i = 0; i < tblDatos.length; i++) {
                    var idVenta = document.getElementById('numeroVenta').value;
                    var idProducto = tblDatos[i].children[0].innerHTML;
                    var Producto = tblDatos[i].children[1].innerHTML;
                    var Precio = tblDatos[i].children[2].innerHTML;
                    var cantidad = tblDatos[i].children[3].innerHTML;
                    var Subtotal = tblDatos[i].children[4].innerHTML;
                    contador--;
                    $.ajax({
                        url: "insertarDetalleVenta.php",
                        method: "post",
                        data: {IdVenta: idVenta, IdProducto : idProducto, Cantidad: cantidad},
                         success:function(r){
                             if(r==1)
                             {
                                alertaN();
                             }else{
                                alertaa();
                                  
                             }
                         }
                    })
                }
            }
            else
            {
                alert("Debe escoger un producto");
            }
            });
            function alertaa(){   
            Swal.fire({
			title: 'Venta registrado',
			text: "La venta se registro con exito",
			icon: 'success',
		}).then(function(){
            window.location.href = 'index.php'; 
        });	
            frmajax.reset(); 
        }
        function alertaN(){
        Swal.fire({
			title: 'La venta no se registro',
			text: "Oops no se logro registrar la venta",
			icon: 'success',
		})
        }
            $(document).ready(
                function funcionInicial(){
                    contador = 0;
                    $('#aumentarFila').click(
                        function(){
                            
                            if(document.getElementById('Productos').selectedIndex!=0)
                            {
                                if(document.getElementById('Cantidad').value.toString().trim()==null||document.getElementById('Cantidad').value.toString().trim()==0)
                                {
                                    alert("Introduzca una cantidad menor");
                                }
                                else
                                {
                                    if(parseInt(document.getElementById('CantidadDisponible').options[document.getElementById("CantidadDisponible").selectedIndex].text) <document.getElementById('Cantidad').value)
                                    {
                                        alert("Introduzca una cantidad menor");
                                    }
                                    else
                                    {
                                        let tblDatos = document.getElementById('tablaContenido').insertRow(contador);
                                        contador++;
                                        let IdProducto = tblDatos.insertCell(0);
                                        let Productos = tblDatos.insertCell(1);
                                        let Precio = tblDatos.insertCell(2);
                                        let Cantidad = tblDatos.insertCell(3);
                                        let PrecioTotal = tblDatos.insertCell(4);
                                        let Eliminar = tblDatos.insertCell(5);
                                        let Indice = tblDatos.insertCell(6);
                                        IdProducto.innerHTML = document.getElementById('IdProducto').value;
                                        Productos.innerHTML = document.getElementById('Productos').value;
                                        Precio.innerHTML = document.getElementById('PrecioIndividual').value;
                                        Cantidad.innerHTML = document.getElementById('Cantidad').value;
                                        PrecioTotal.innerHTML = document.getElementById('PrecioTotal').value;
                                        Indice.classList.add('Indice')
                                        Indice.innerHTML = document.getElementById("CantidadDisponible").selectedIndex;
                                        Eliminar.classList.add('link_eliminar')
                                        Eliminar.innerHTML = "Eliminar";
                                        document.getElementById('Total').innerHTML = (parseFloat(document.getElementById('Total').innerHTML) + parseFloat(document.getElementById('PrecioTotal').value)).toString();
                                        document.getElementById('cantidadSumada').value = (parseInt(document.getElementById('cantidadSumada').value)) + (parseInt(document.getElementById('Cantidad').value));
                                        let index = document.getElementById("CantidadDisponible").selectedIndex;
                                        document.getElementById('CantidadDisponible').options[index].text = (document.getElementById("CantidadDisponible").value - document.getElementById("Cantidad").value).toString();
                                        
                                    }
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
                            document.getElementById('IdProducto').selectedIndex = document.getElementById('Productos').selectedIndex;

                            document.getElementById('PrecioTotal').value = document.getElementById('PrecioIndividual').value * document.getElementById('Cantidad').value;
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
                    $('#NIT').on('input',
                        function(){
                            //document.getElementById('Apellido').value = document.getElementById('NIT').value;
                            conseguirApellido()
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
                        document.getElementById('Total').innerHTML = (parseFloat(document.getElementById('Total').innerHTML) - document.getElementById('tablaContenido').children[$(this).parent().index()].children[4].innerHTML).toString();
                        document.getElementById('Cantidad').innerHTML = (parseFloat(document.getElementById('Cantidad').innerHTML) - document.getElementById('tablaContenido').children[$(this).parent().index()].children[3].innerHTML).toString();
                        document.getElementById('cantidadSumada').value = (parseInt(document.getElementById('cantidadSumada').value)) - (parseInt(document.getElementById('tablaContenido').children[$(this).parent().index()].children[3].innerHTML).toString());
                        var ind = parseInt((document.getElementById('tablaContenido').children[$(this).parent().index()].children[6].innerHTML).toString());
                        document.getElementById('CantidadDisponible').options[ind].text = parseInt(document.getElementById('CantidadDisponible').options[ind].text.toString()) + parseInt(document.getElementById('tablaContenido').children[$(this).parent().index()].children[3].innerHTML.toString());
                        console.log(ind);
                        $(this).parent().remove();
                        contador--;
                    })
                    
                }
            );
        </script>
        <!--<script>
            function verCantidad(){
                var cantidad = document.getElementById('IdProducto').value;
                $.ajax({
                    url: "conseguirCantidad.php",
                    method: "POST",
                    data: {Cantidad: cantidad},
                    success: function(res){
                        return res;
                        //document.getElementById("cantidadSumada").value = parseInt(res);
                    }
                })
                /*.success(
                    function(res){
                    document.getElementById("cantidadSumada").value = parseInt(res);
                })*/
            }
        </script>-->
        <script>
            function conseguirApellido(){
                var nit = document.getElementById('NIT').value;
                $.ajax({
                    url: "conseguirApellido.php",
                    method: "POST",
                    data: {NIT: nit},
                    success: function(res){
                        if(res!=null)
                        {
                            document.getElementById('Apellido').value = res;
                        }
                    }
                })
            }
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
                <h2 class="form_title">Ingrese datos de la Venta</h2>
                <div class="main_forms_container">
                    <div class="columns_container">
                        <div class="form_container">
                            
                            <div class="form_group">
                                <input type="text" id="Fecha" class="form_input" placeholder=" " name="Fecha" readonly>
                                <label for="Fecha" class="form_label">Fecha:</label>
                            </div>
                            <div class="form_group">
                                <input type="number" id="NIT" class="form_input" placeholder=" " value="0" min="0" name="NIT">
                                <label for="NIT" class="form_label">NIT:</label>
                                <span class="form_line"></span>
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

                                <select id="IdProducto" class="form_input" name="IdProducto" disabled>
                                    <option>-----</option>
                                    <?php
                                        while($productos = mysqli_fetch_array($query5)){
                                    ?>
                                        <option><?php  echo $productos['IdProducto']?> </option>   
                                    <?php 
                                        }
                                    ?>
                                </select>
                                <label for="IdProducto" class="form_label">Id Producto:</label>
                            </div>


                            <div class="form_group">
                                <input type="text" id="Apellido" class="form_input" placeholder=" " name="Apellido">
                                <label for="Apellido" class="form_label">Apellido:</label>
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
                                </select>
                                <label for="CantidadDisponible" class="form_label">Cantidad disponible:</label>
                            </div>
                            <div class="form_group">
                                <input type="number" id="PrecioTotal" class="form_input" placeholder=" " value = "0" min="0" name="PrecioTotal"  readonly >
                                <label for="PrecioTotal" class="form_label">Precio total:</label>
                                <span class="form_line"></span>
                            </div>
                            
                            <div class="form_group">
                                <input type="number" id="numeroVenta" class="form_input" placeholder=" " value="<?php echo $numeroVenta['IdVenta']+1 ?>" min="0" name="numeroVenta" readonly>
                                <label for="numeroVenta" class="form_label">Numero de venta:</label>
                                <span class="form_line"></span>
                            </div>
                        </div>
                        <input id="cantidadSumada" type="hidden" class="form_submit" value=0>
                        <input id="aumentarFila" type="submit" class="form_submit" value="Agregar">
                    </div>
                </div>
                
            </div>
            
            
            <div class="table_container">
                <div class="table-wrapper">
                    <table id="tblDatos" class="tabla">
                        <thead>
                            <th>IdProducto</th>
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
                    <h3>Total compra:</h3>
                    &nbsp;
                    <h3 id="Total">0</h3>
                    <form style="display: inline;" id="evento_formulario">
                        <input id="TerminarVenta" type="submit" class="form_submit" value="Terminar venta">
                    </form>
                </div>
            </div>
            
        </div>
    </body>
</html>