<?php

function ShowTab($tab){
    for($i = 0; $i < count($tab); $i++){
        echo $tab[$i]."<br>";
    }
}

$liste = array('banane','ananas','patates','oranges');

ShowTab($liste)

?>