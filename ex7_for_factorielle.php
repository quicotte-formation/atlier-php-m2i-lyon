<?php

/**
 * Calculer factorielle n'un nombre. $n(ex pour $n=7: 7*6*5*4*3*2)
 */

$res = 1;
for( $n = 4 ; $n>1 ; $n-- ){
    $res *= $n;// equivalent à $res = $res * $n
    echo $n . ' x ';
}

echo " = " . $res;