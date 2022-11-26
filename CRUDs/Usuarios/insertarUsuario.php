<?php
  include("../conexion.php");
$con=conectar();


$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$CI=$_POST['CI'];
$Rol=$_POST['Rol'];
$Contrasena=$_POST['Contrasena'];
$Estado=1;

$sql="INSERT INTO usuario(Nombre, Apellido, CI, Contraseña, Rol, Estado)
 VALUES('$Nombre','$Apellido','$CI','$Contrasena','$Rol',1)";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Index.php");
}else {
    Header("Location: CrearUsuario.php");

}
?>