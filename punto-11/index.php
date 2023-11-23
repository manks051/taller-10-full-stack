<?php
//// DATOS DE ENTRADA VARIABLES
$odd= 1;
$sum = 0;

//// PROCESO
while ($odd <= 100 ) {
echo $odd . "\n";
$sum = $sum + $odd;
$odd = $odd + 2;
}

//// DATOS DE SALIDA
echo "La sumatoria total de los impares es: " . $sum;