<?php
function conectar(){
  $host="localhost";
  $user="root";
  $pass2="";

  $bd="farmaciagamalex";

  $con=mysqli_connect($host,$user,$pass2);

  mysqli_select_db($con,$bd);

  return $con;
}

$con=conectar();

$usuario = $_POST['CI'];
$pass = $_POST['Contraseña'];

if (empty($usuario) || empty($pass)) {
  # code...
  Header("Location: index.php");
  exit();
}




$sql="SELECT IdUsuario from usuario where CI ='123456' && Contraseña = '12345'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

if($result){

  header("Location: ../Reportes/dashBoard.php");
  session_start();
  $_SESSION["IdUsuario"] = $usuario;

}
else{
  $error = "Algo salio mal, correo o contraseña incorrecta";
  Header("Location: index.php");
}

?>