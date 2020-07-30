<?php

/**
 * Grace à une boucle while, rechercher les 10 premiers nombres premiers.
 */

$compteurPremiers = 0;
$n = 2;
while($compteurPremiers<10){

    $premier = true;
    for($i=2;$i<$n;$i++){
        if( $n % $i   ==   0 ){# Divisible
            $premier=false;
        }
    }

    if( $premier==true ){
        echo $n . " ";
        $compteurPremiers++;
    }

    $n++;
}