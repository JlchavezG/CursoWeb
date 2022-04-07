<?php
error_reporting(0);
session_start();
include 'ConectaBase.php';
if(isset($_POST['ingresar'])){
  $Email = $Conexion->real_escape_string($_POST['email']);
  $password = $Conexion->real_escape_string(md5($_POST['password']));
  $q = "SELECT * FROM Usuarios WHERE Email = '$Email' and Password = '$password'";
  if($resultado = $Conexion->query($q)) {
    while($row = $resultado->fetch_array()) {
      $Emailok = $row['Email'];
      $passwordok = $row['Password'];
    }
      $resultado->close();
    }
    $Conexion ->close();
      if(isset($Email) && isset($password)) {
          if ($Email == $Emailok && $password == $passwordok) {
               $_SESSION['loguin']= TRUE;
               $_SESSION['Usuario'] = $usuario;
               header("location:Escritorio.php");
             }
           else {
              $alerta.="<div class='alert alert-danger alert-dismissible fade show shadow' role='alert'>
                           <svg class='bi text-danger' width='20' height='20' role='img' aria-label='Tools'>
                             <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                           </svg>
                           <strong> Usuario y/o password invalido</strong> Por favor verifica tus credenciales o contacta a soporte.
                           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                }
             }
         else {
        header("location:index.php");
          }
      }
?>