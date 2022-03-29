<?php
 if(isset($_POST['letra'])){
  $letra = $_POST['letra'];
  if($letra == ''){
    echo "El valor de la caje de texto con la letra a validar no puede estar vacia";
  }
  else{
      switch($letra){
         case 'a':
         case 'e': 
         case 'i':
         case 'o':
         case 'u':
         echo "La letra que digitaste es: ".$letra." y es una vocal";
         break;
         default:
         echo "La letra que digitaste es: ".$letra." y es una consonante";        
      }
  }


 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consonante o vocal con PHP</title>
</head>
<body>
    <div class="container py-5 mt-5">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="Post">
             <input type="text" placeholder="Digita la letra a validar" name="letra" class="form-control" required>
             <input type="submit" value="Validar" name="Validar" class="btn btn-sm btn-dark">
        </form>
    </div>
<script scr="js/bootstrap.min.js"></script>    
</body>
</html>