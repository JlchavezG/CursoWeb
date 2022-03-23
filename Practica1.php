<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Instalar Bootstrap5</title>
</head>
<body>
    <div class="container text-center">
        <h1>Programando con JavaScript</h1><hr>
        <form action="">
            <input type="text" class="form-control" id="objeto1" placeholder="Digita un numero"/>
            +<input type="text" class="form-control" id="objeto2" placeholder="Digita segundo numero">
            <input type="submit" value="Calcular" class="btn btn-sm btn-success" onclick="Calcular();">
        </form>
    </div>
    <script>
         function Calcular(){
         numero1 = document.getElementById('objeto1').value;
         numero2 = document.getElementById('objeto2').value;
         if(numero1 == ''){
           alert("El primer campo esta vacio no puedo hacer una suma sin dos numeros");
         }
         else if(numero2 == ''){
            alert("El segundo campo esta vacio no puedo hacer una suma sin dos numeros");
         }
         else{
         numero1 = parseInt(numero1);
         numero2 = parseInt(numero2);    
         suma = numero1 + numero2;
         document.write(suma); 
          }
         }
    </script>
<script src="js/bootstrap.min.js"></script>    
</body>
</html>