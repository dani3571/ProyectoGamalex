<?php 
    include("../conexion.php");
    include("../../EstructuraCuerpo/P.php");
    $con=conectar();
    $sql="SELECT IdVenta,venta.IdUsuario,venta.IdCliente,cliente.NIT,venta.Estado,FechaVenta,Cantidad,
    CONCAT(Usuario.Nombre,' ', Usuario.Apellido) as NombreCompleto  
    FROM venta inner join Usuario on venta.IdUsuario = Usuario.IdUsuario
    inner join cliente on venta.IdCliente = cliente.IdCliente order by IdVenta desc";
    $query=mysqli_query($con,$sql);
    $db = conectar();
      $query2=$db->query("select * from venta");//cambiar select*from 
      $laboratorio = array();//productos
    
      while($r=$query2->fetch_object()){$laboratorio[]=$r;}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ventas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/newStyles.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="../jspdf/dist/jspdf.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://code.jquery.com/ui/1.12.1/themes/ui-darkness/jquery-ui.css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
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
            $(document).ready(
                function funcionInicial(){
                $("#GenerarReporte").click(function(){
                    console.log("reporte");
                  var pdf = new jsPDF();
                  const fecha = new Date();
                  pdf.text(20,20,"Reporte de Ventas");
                  pdf.text(11,11,"<?php echo "Fecha del reporte: ". date(" d/m/Y")?>");
                  var columns = ["IdVenta", "IdUsuario", "IdCliente", "FechaVenta", "Cantidad"];
                  var data = [
                <?php foreach($laboratorio as $c):?>
                 [
                 "<?php echo $c->IdVenta; ?>", 
                 "<?php echo $c->IdUsuario; ?>", 
                 "<?php echo $c->IdCliente; ?>", 
                 "<?php echo $c->FechaVenta; ?>",
                 "<?php echo $c->Cantidad; ?>"
                ],
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
                  pdf.save('ReporteVentas.pdf');
              
                });
            }
            );
</script>
    </head> 
    
    <body>
        <div class="header-container">
         
        </div>
        <div class="main-container">
                <div class="titulo">
                    <h1>Registro de Ventas</h1>
                </div>
                <div class="formulario">
                <div class="crear">
                    <a class="link_crear" href="CrearNuevaVenta.php">CREAR</a>
                    <button style="margin-left: 2px;" class="link_crear" id="GenerarReporte" >Reporte de ventas</button>
                </div>  
             
            
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Numero venta</th>
                            <th>Usuario</th>
                            <th>NIT</th>
                            <th>FechaVenta</th>
                            <th>Cantidad</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                                if($row[4]!=0)
                                {
                        ?>
                            <tr>
                                <th><?php  echo $row['IdVenta']?></th>
                                <th><?php  echo $row['NombreCompleto']?></th>
                                <th><?php  echo $row['NIT']?></th>
                                <th><?php  echo $row['FechaVenta']?></th>
                                <th><?php  echo $row['Cantidad']?></th>  
                                <th><a href="actualizarVenta.php?id=<?php echo $row['IdVenta'] ?>" class="link_editar">Editar</a></th>
                                <th><a href="detalleVenta.php?id=<?php echo $row['IdVenta'] ?>" class="link_editar">Detalle</a></th>                                 
                            </tr>
                        <?php 
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>

<?php
include("../../EstructuraCuerpo/S.php");
?>
