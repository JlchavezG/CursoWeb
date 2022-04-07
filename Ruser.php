<?php 
 include 'includes/ConectaBase.php';
 if(isset($_POST['Registro'])){
     echo "Nos vemos la siguente clase";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Registro de usuario</title>
</head>
<body>
       <div class="container">
             <div class="row mt-5">
                    <h2 class="display-6 text-center">Registro</h2>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                       <input type="text" name="Nombre" class="form-control" placeholder="Nombre" required>
                       <input type="text" name="Apellidos" class="form-control" placeholder="Apellidos" required>
                       <input type="date" name="Fecha" class="form-control" placeholder="Fecha" required>
                       <input type="email" name="Email" class="form-control" placeholder="Email" required>
                       <input type="password" name="Password" class="form-control" placeholder="Password" required>
                       <input type="submit" name="Registro" class="btn btn-sm btn-success" value="Registrar">
                    </form>
             </div>
       </div>
<script src="js/bootstrap.min.js"></script>    
</body>
</html>