<?php
$conex = mysqli_connect("localhost","root","","farmaciagamalex");

$Nombre=$_POST['Nombre'];
$Direccion=$_POST['Direccion'];

$sql="INSERT INTO laboratorio(Nombre, Direccion, Estado)
 VALUES('$Nombre','$Direccion',1)";
$query= mysqli_query($conex,$sql);



?>