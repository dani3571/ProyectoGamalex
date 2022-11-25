<?php
include("./CRUDs/conexion.php");
$con=conectar();

$usuario = $_POST['CI'];
$pass = $_POST['Password'];

if (empty($usuario) || empty($pass)) {
  # code...
  Header("Location: index.php");
  exit();
}

$sql="SELECT * from CI where CI ='".$usuario ."'";

$result = mysqli_query($con,$sql);

if($pass === $result['Password'] && $usuario === $result['CI']){

    session_start();
    $_SESSION["CI"] = $usuario;
    header("Location: menu.php");
   
}else{
}

 ?>