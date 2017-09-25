<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Funcion que pida por pantalla una temperatura en grados celsius, muestre un menú
    para convertirlos a fahrenheit o kelvin y muestre el equivalente por pantalla. </h2>
    <?php
    function temperatura($celsius,$menu){
      if ($menu == 'farenheit') {
        $conversion = ($celsius*1.8)+32;
        echo "La conversion es $conversion";
      }
      elseif ($menu=='kelvin') {
        $conversion = ($celsius + 273);
        echo "La conversion es $conversion";

      }

    }
     echo temperatura (8,'kelvin');

     ?>


  </body>
</html>
