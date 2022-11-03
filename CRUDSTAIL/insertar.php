<?php
  include_once("../Productos/conexion.php");

  $nombre = $_POST['nombre'];
  $direccion = $_POST['direccion'];
  $estado = strtoupper($_POST['estado']);

?>