<?php

echo "Wat is uw gewicht in KG: ";
$gewicht = readline();

echo "Wat is uw lengte in CM: ";
$lengteCM = readline();

$lengteM = $lengteCM / 100;
$BMI =  $gewicht / ($lengteM * $lengteM);

echo "U heeft een BMI van $BMI" . PHP_EOL;

switch ($BMI) {
    case ($BMI < "18.5"):
        echo "Uitkomst index: Onder gewicht";
    break;
    case ($BMI >= "18.5") && ($BMI <= "25"):
        echo "Uitkomst index: Gezond gewicht";
    break;
    case ($BMI >= "25") && ($BMI <= "30"):
        echo "Uitkomst index: Overgewicht";
    break;
    case ($BMI >= "30"):
        echo "Uitkomst index: Ernstig overgewicht (obesitas)";
    break;
}

?>