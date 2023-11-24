<?php
//// DATOS DE ENTRADA VARIABLES, FOR
$numberArray = array(124,54,67,256,9);

//// PROCESO
foreach($numberArray as $number) {
  $sum = $sum + $number;
}
//// DATOS DE SALIDA, FOR
echo "La suma total es: " . $sum . "\n";
