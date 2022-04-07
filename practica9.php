<?php
 $multiplicando; 
 $multiplicador;
 echo "<table text-aling:center; border=3>";
 echo "<tr>";
 for($tabla=1; $tabla<=10; $tabla++){
      echo "<td>Tabla del $tabla </td>";
 }
 echo "</tr>";
 echo "<tr>";
 for($multiplicador = 1; $multiplicador <=10; $multiplicador++ ){
       for($multiplicando = 1; $multiplicando <=10; $multiplicando++){
           echo "<td>$multiplicando x $multiplicador = ";
           echo ($multiplicando*$multiplicador);
           echo "</td>";
       }
       echo "</tr>";
 }
 echo "</table>";

?>
