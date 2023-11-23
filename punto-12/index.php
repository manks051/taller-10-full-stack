<?php
//// DATOS DE ENTRADA VARIABLES, FOR
$mult = 0;

//// PROCESO
echo "Ingrese un numero a multiplicar:  \n";
$mult = readline();

//// DATOS DE SALIDA, FOR
for ($x = 0; $x <= 30; $x = $x + 1) {
  $equation = $mult * $x;
  echo $mult . "x" . $x . "=" . $equation . "\n";
}