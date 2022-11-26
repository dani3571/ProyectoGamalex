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
$sql="SELECT * from CI where CI ='$usuario'";
$result = mysqli_query($con,$sql);
if($result){

  header("Location: menu.php");
}
/*if (empty($usuario) || empty($pass)) {
  # code...
  Header("Location: index.php");
  exit();
}


$usuario2;
$result = mysqli_query($con,$sql);
while($usuario2 = mysqli_fetch_array($result)){
  if($pass == $usuario2['Contraseña'] && $usuario == $usuario2['CI']){
    session_start();
    $_SESSION["CI"] = $usuario;
    
    
}else{
}


}*/

 ?>