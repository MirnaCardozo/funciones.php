<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Funcion que muestre por pantalla si un número es par o impar</h2>
    <?php
     function par($n){
     if (($n%2)==0) {
echo "El número es par";
       }
       else {
       echo "El número es impar";
       }


     }
echo par(2) ;


     ?>
  </body>
</html>
