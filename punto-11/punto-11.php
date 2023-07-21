<?php
//DECLARACION DE VARIABLES DE ENTRADA
$sum = 0;

//PRIOCESO
for ($x = 0; $x <= 100; $x = $x + 2) {
    echo $x . "\n";
    $sum = $sum +$x;
}

echo "suma total: " . $sum;

?>
