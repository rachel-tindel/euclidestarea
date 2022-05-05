<?php
$host = "163.178.107.10";
$user = "laboratorios";
$pass = "KmZpo.2796";
$bd = "tarea1-b97821";

$conexion = mysqli_connect($host,$user,$pass,$bd);

if(!$conexion){
  die("Conexion fallo: ". mysqli_connect_error());
}else{
  echo "Conexion con exito";
}
?>
