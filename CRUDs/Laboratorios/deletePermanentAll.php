<?php
include('/xampp/htdocs/ProyectoGamalex/CRUDs/conexion.php');
$con = conectar();

$sql="DELETE FROM laboratorio WHERE Estado = 0";

?>