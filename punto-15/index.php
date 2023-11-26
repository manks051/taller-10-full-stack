<?php
include "./operations.php";

//// DATOS DE ENTRADA VARIABLES
$firstNumber = 0;
$secondNumber = 0;
$option = "";

//// PROCESO
$firstNumber = requestNumber();
$secondNumber = requestNumber();
$option = operationMenu();
$result = operations($firstNumber, $secondNumber, $option);

echo "El resultado de la operacion es: " . $result;