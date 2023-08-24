<?php

function Phrase($tab){
    for($i=0;$i<count($tab);$i++){
        echo $tab[$i]." ";
    }
}

$phrase1 = array('je','suis','un','developpeur','web');

Phrase($phrase1);

?>