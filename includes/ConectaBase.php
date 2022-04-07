<?php
// realizar la conexcion a la base de datos 
$mensaje = "";
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "CursoWeb";
$Conexion = mysqli_connect($servidor, $usuario, $password, $bd);
if($Conexion->connect_error){
  die("Error al conectar la base de datos".$Conexion->connet_error);
}

?>