<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laboratorios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/estilosCRUDS.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src = "jquery/jquery-3.6.0.min.js"></script>
        <link href="https://code.jquery.com/ui/1.12.1/themes/ui-darkness/jquery-ui.css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">

    <!--Aqui debe estar el header  <link rel="stylesheet" href="../css/header.css"> -->
      
         <div class="header-container">
            <?php
             include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/header.php");
            ?>
        </div>
    <body>
    
        <div class="form" >
            <form id="frmajax" method="POST">
                <h2 class="form_title">Ingrese datos del laboratorio</h2>
                <div class="form_container">
                    <div class="form_group">
                        <input pattern="[A-Za-z- ]+"  minlength="4" maxlength="30" required 
                        title="Solo letras. Tamaño mínimo: 4" type="text" id="Nombre" class="form_input" placeholder=" " name="Nombre" >
                        <label for="Nombre" class="form_label" id="Nombre">Nombre:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_group">
                        <input pattern="[A-Za-z0-9- -,]+"  minlength="6" maxlength="40" required 
                        title="Solo letras y numeros. Tamaño mínimo: 6 "type="text" id="Direccion" class="form_input" placeholder=" " name="Direccion" >
                        <label for="Direccion" class="form_label" id="Direccion">Direccion:</label>
                        <span class="form_line"></span>
                    </div> 
                        <input id="btnGuardar" type="submit" class="form_submit" value="Guardar" onclick= 'validar()'>

                    
                    </div>
            </form>
        </div>
    <script>
     
        $(document).ready(function(){      
                $('#btnGuardar').click(function(){
                if(document.getElementById("Nombre").value.length > 3  &&
                document.getElementById("Direccion").value.length >= 6  ){
                    var datos =$('#frmajax').serialize();
                   
                    $.ajax({
                     
                        type:"POST",
                         url:"insertarLaboratorio.php",
                         data: datos,
                         success:function(r){
                             if(r==1)
                             {
                                alertaN();
                             }else{
                                alertaa();
                                  
                             }
                         }
                        
                     });
                    
                     return false;
                 }
          });     
        });
    
        function alertaa(){   
            Swal.fire({
			title: 'Laboratorio registrado',
			text: "El laboratorio se registro con exito",
			icon: 'success',
		}).then(function(){
            window.location.href = 'index.php'; 
        });	
            frmajax.reset(); 
        }
        function alertaN(){
        Swal.fire({
			title: 'El laboratorio no se registro',
			text: "Oops no se logro registrar el laboratorio",
			icon: 'success',
		})
        }
    
    </script>
        <?php
       include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/footer.php");
       ?>
    </body>
    
</html>