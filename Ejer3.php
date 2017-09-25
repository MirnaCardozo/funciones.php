<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h2>Funcion que calcule el precio promedio de un articulo considerando que se conoce el precio del articulo en tres establecimientos distintos</h2>
<?php

function promedio($prec1,$prec2,$prec3){
$resultado = ($prec1+$prec2+$prec3)/3;
return $resultado;
  }

  echo "En el sao el precio es 2500<br>";
  echo "En el exito el precio es 4000<br>";
  echo "En la rebaja el precio es 3000<br> ";
  echo"El promedio es ", promedio(1500,4000,3000);

 ?>
  </body>
</html>
