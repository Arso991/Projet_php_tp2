<?php

$gender = "Masculin";
$origine = "aube";

switch($gender && $origine){
    case "Masculin" && "aube" :
        echo "Vous etes un homme et de l'aube";
        break;
    case "Feminin" && "aube" :
        echo "Vous etes une femme et de l'aube";
        break;
    case "Masculin" && "ailleurs" :
        echo "Vous etes un homme et d'ailleurs";
        break;
    case "Femme" && "ailleurs" :
        echo "Vous etes une femme et d'ailleurs";
        break;
    default:
        echo "Autres ? Veuillez indiquez votre genre et votre provenance";
}

?>