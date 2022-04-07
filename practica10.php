<?php 
 include 'includes/ConectaBase.php';
 if(isset($_POST['Boton'])){
    $Genero = $_POST['NombreGenero'];
    $insertar = "INSERT INTO Genero(NombreGenero)VALUES('$Genero')";
    $ejecuta = $Conexion->query($insertar);
    if($ejecuta > 0){
       echo "Exito se registro el genero";
    }
 
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Conectando la Base de datos</title>
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="text" name="NombreGenero" placeholder="Nombre de Genero" class="form-control" required>
            <input type="submit" name="Boton" value="Registrar" class="btn btn-success">
        </form>
    </div>
</div>       
<script src="js/bootstrap.min.js"></script>    
</body>
</html>