<?php
// VARIABLES DE ENTRADA
const TICKET_PRICE =25000;
$membershipType = "";
$personNumber = 0;

//PROCESO
echo "Ingrese su tipo de afiliacion: ";
fscanf (STDIN, "%s", $membershipType);
echo "Ingrese el numero de personas: ";
fscanf (STDIN, "%d", $personNumber);

$totalpay = $personNumber * TICKET_PRICE ;

if ($membershipType == "A" || $membershipType == "B") {$totalpay = $totalpay - ($totalpay * 0.3); } 
else {
echo 
"Usted no cuenta con membresia valida para obtener un descuento \n";
}

echo "El total a pagar es:" . $totalpay;

?>
