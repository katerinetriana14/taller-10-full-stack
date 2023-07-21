<?php 
// DECLARACION DE VARIABLES DE ENTRADA

$firstNumber = 0;
$secondNumber = 0;
$operationType = "";
$result = 0;

// PROCESO
echo "ingrese el primer numero a operar: ";
fscanf(STDIN, "%d", $firstNumber);
echo "ingrese el segundo numero a operar:";
fscanf(STDIN, "%d", $secondNumber);


echo "elija el tipo de operacion: \n";
echo "1-sumar\n";
echo "2-restar\n";
echo "3-multiplicar\n";
echo "4-dividir\n";
fscanf(STDIN, "%d", $operationType);

switch ($operationType) {
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
        echo "No elijio una opcion correcta";
}
echo " el resultado es:" . $result; 

?>
