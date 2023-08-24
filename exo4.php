<?php

function Ttc($total, $taxe){
    return $total * (1 + $taxe/100);
}

$facture1 = Ttc(15000,18);
$facture2 = Ttc(425000,26);
$facture3 = Ttc(250000,22);

echo "Le prix TTC de la facture de 15000 avec une taxe de 18% est $facture1 <br>";
echo "Le prix TTC de la facture 425000 avec une taxe de 26% est $facture2 <br>";
echo "Le prix TTC de la facture 250000 avec une taxe de 22% est $facture3 <br>"

?>