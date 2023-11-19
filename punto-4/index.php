<?php
/// DATOS DE ENTRADA
$firstNames = "";
$lastNames = "";

/// PROCESO
echo "Ingrese sus nombres: " .  "\n";
$firstNames = readline();

echo "Ingrese sus apellidos: " . "\n";
  $lastNames = readline();

/// DATOS DE SALIDA
echo "Su nombre de usuario es: " . $firstNames . " " . $lastNames;
