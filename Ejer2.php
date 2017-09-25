<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Funcion que calcule  el cuadrado de un  número cualquiera y lo muestre en pantalla</h2>
<?php


function cuadrado($numero){
  $resultado =  $numero*$numero;
  return $resultado;
}
echo cuadrado(5);

 ?>
</body>
</html>
