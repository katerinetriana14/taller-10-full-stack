<?php
//DECLARACION DE VARIABLES DE ENTRADA
$number = 0;
$x = 0;

//PROCESO
echo "Escriba el numero a multiplicar: ";
fscanf(STDIN, "%d", $number);


for ($i = 0; $i <= 30; $i++) {
    $result = $number * $i;
    echo " $i = $result ";
}
?>



