<?php
//// DATOS DE ENTRADA CONSTANTE Y VARIABLE
$option = 0;
$firstNumber = 0;
$secondNumber = 0;
$result = 0;  
//// PROCESO
echo "Ingrese el primer numero a operar: \n";
$firstNumber = readline();

echo "Ingrese el segundo numero a operar: \n";
$secondNumber = readline();

echo "Digite la operacion que quiere ejecutar: \n";
echo "1 - SUMAR \n";
echo "2 - RESTAR \n";
echo "3 - MULTIPLICAR \n";
echo "4 - DIVIDIR \n";

$option = readline();

switch ($option) {
  case 1:
    $result = $firstNumber + $secondNumber;
    break;
  case 2:
    $result = $firstNumber - $secondNumber;
    break;  
  case 3:
    $result = $firstNumber * $secondNumber;
    break;
  case 4:
    $result = $firstNumber / $secondNumber;
    break;
    default:
    echo "Digito una opcion incorrecta \n";
 }
echo "El resultado de la operacion es: " . $result . "\n";
