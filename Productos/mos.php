
    <!--Css/Tailwind-->
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.min.js"></script>
    <link rel="stylesheet" href="CSS\estilosev.css">
<?php

$inc = include("conexion.php");

if($inc){
//Cuando productos tenga estado hacer una consulta where<>
    $consulta = "SELECT * FROM producto";
    $resultado = mysqli_query($conex, $consulta);
    if($resultado ){
        while($row = $resultado->fetch_array()){
            $nombre = $row['Nombre']; 
            $cantidad = $row['Cantidad'];
            $precioUnidad = $row['PrecioUnidad'];
            $descripcion = $row['Descripcion'];
        
        ?>
        
      <div class="group relative">
        <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-60">
          <img src="https://images.ecestaticos.com/2OFO72FGrUW2USgjzNyAXE-13_I=/0x143:3974x2379/1338x752/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F742%2F69a%2Fccf%2F74269accf14f3a89df5f365ad6d3f16c.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                <p align="left" style="font-size: 16px;" ><strong><a href="#"> <?php echo $nombre;?></a></strong></p>
              </a>
            </h3>
            <p style="font-size:18px; color:purple;"class="text-sm font-medium text-gray-900" >Bs. <?php echo $precioUnidad;?></p>
          </div>
        </div>
        </div>
             <?php
        }
    }
}
?>



























