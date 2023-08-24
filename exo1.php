<?php

//fonction qui calcule le volume d'une pyramide
function VolumePyramide ($ray, $hau){
    return $ray * $ray * $hau * 3.14 * (1/3);
}

$pyramide1 = VolumePyramide(3,13);
echo "Le volume de la pyramide 1 est $pyramide1";

?>