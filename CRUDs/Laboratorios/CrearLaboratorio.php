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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <!--Aqui debe estar el header  <link rel="stylesheet" href="../css/header.css"> -->
    </head>
    <body>
    
        <div class="form">
            <form action="insertarLaboratorio.php" id="frmajax" method="POST">
                <h2 class="form_title">Ingrese datos del laboratorio</h2>
                <div class="form_container">
                    <div class="form_group">
                        <input type="text" id="Nombre" class="form_input" placeholder=" " name="Nombre" >
                        <label for="Nombre" class="form_label" id="Nombre">Nombre:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_group">
                        <input type="text" id="Direccion" class="form_input" placeholder=" " name="Direccion" >
                        <label for="Direccion" class="form_label" id="Direccion">Direccion:</label>
                        <span class="form_line"></span>
                    </div> 
                       <button id="btnGuardar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" onclick="location.href='CRUDs\Laboratorios\index.php'">
                         Guardar
                        </button>

                    
                    </div>
            </form>
        </div>


        <script type="text/javascript" src="../Laboratorios/añadirLaboratorio.js"></script>
        <?php
       include("/xampp/htdocs/ProyectoGamalex/EstructuraCuerpo/footer.php");
       ?>
    </body>
    
</html>