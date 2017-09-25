<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Funcion que muestre las operaciones sumar,restar,multiplicar,dividir,potencia y la  raiz.
    Debe mostrar en pantalla la operacion y el resultado.</h2>
    <?php
function operaciones($a1,$a2,$operacion){
  $resultado=0;
  if ($operacion == 'sumar') {
    $resultado = $a1+$a2;
  }
  elseif ($operacion =='restar') {
    $resultado =$a1-$a2;
  }
  elseif ($operacion == 'multiplicar') {
    $resultado = $a1*$a2;
  }
  elseif ($operacion =='dividir') {
    $resultado = $a1/$a2;
  }
  elseif ($operacion == 'potencia') {
    $resultado = pow($a1,$a2);
  }
  return $resultado;

}
function raiz($a1,$a2){
$resultado1 = sqrt($a1);
$resultado2 = sqrt($a2);
echo "La raiz del primer número es $resultado1<br>";
echo "La raiz del segundo número es $resultado2";

}
   $operacion = "potencia";
if ($operacion == 'raiz') {
  echo "El resultado es, ",raiz(8,6,'raiz');

}
else {
  echo "La operacion es $operacion <br>";
  echo "El resultado es " , operaciones(8,6,'potencia');
}

   ?>

  </body>
</html>
