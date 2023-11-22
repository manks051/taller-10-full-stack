<?php
//// DATOS DE ENTRADA VARIABLES
$number=0;
$i = 0;

//// PROCESO
echo "Ingresa el numero a multiplicar:" . "\n";
$number = readline();

while ($i <= 30){
echo $number . "x" . $i . "=" . $number * $i . "\n";
 $i++;
}
