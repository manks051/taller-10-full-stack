<?php
/// DATOS DE ENTRADA
$exerciseNumberOne = "";
$exerciseNumberTwo = "";

/// PROCESO
echo "Digite el primer numero a sumar: " .  "\n";
$exerciseNumberOne = readline();

echo "Digite el segundo numero a sumar: " . "\n";
$exerciseNumberTwo = readline();

$result = $exerciseNumberOne + $exerciseNumberTwo;

/// DATOS DE SALIDA
echo "El resultado de la suma es: " . $result;

