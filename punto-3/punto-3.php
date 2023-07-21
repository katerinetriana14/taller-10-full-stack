<?php 
// DECLARACION DE VARIABLES DE ENTRADA

$firstNumber = 0;
$secondNumber = 0;

// PROCESO
echo "ingresa el primer numero a sumar:";
fscanf(STDIN, "%d", $firstNumber);
echo "ingresa el segundo numero a sumar:";
fscanf(STDIN, "%d", $secondNumber);

$add = $firstNumber + $secondNumber;

// SALIDA
echo "La suma es:" . $add; 
?>
