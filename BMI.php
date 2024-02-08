<?php

echo "Wat is uw gewicht in KG: ";
$gewicht = readline();

echo "Wat is uw lengte in CM: ";
$legnteCM = readline();

$lengteM = $lengteCM / 100;
$BMI =  $gewicht / ($lengteM * $lengteM)

?>