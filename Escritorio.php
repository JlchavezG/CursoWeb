<?php
 error_reporting(0);
 session_start();
 // validar que pase por el login y estrar los datos del usuario
 $usuario = $_SESSION['Usuario'];
 if(!isset($usuario)){
   header("location:index.php");
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Escritorio</title>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center display-6">Escritorio</h2>
    <div class="row text-center">
    <a href="perfil.php" class="text-decoration-none text-info">Perfil</a>   
    <a href="includes/Csesion.php" class="text-decoration-none text-info">Cerrar Sesion</a>
    <a href="Ruser.php" class="text-decoration-none text-info">Registrar Usuario</a>
    </div>
</div>
<script src="js/bootstrap.min.js"></script>    
</body>
</html>