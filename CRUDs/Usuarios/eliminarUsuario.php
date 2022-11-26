<?php
include("../conexion.php");
$con=conectar();
$Estado = 0;
$cod_usuario=$_GET['id'];

$sql="UPDATE usuario SET Estado=$Estado WHERE IdUsuario='$cod_usuario'";
$query=mysqli_query($con,$sql);
    if($query){
        Header("Location: Index.php");
    }
?>