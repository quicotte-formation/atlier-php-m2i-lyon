<?php

/*
 * Caculer la table de multiplication de $a avec une boucle for.
 * 3 6 9 .. 30
 */

// Méthode 1
$a = 5;
for($i=$a ; $i<=10*$a ; $i+=$a){
    echo $i . " ";
}

echo "\n";

// Méthode 2
for($i=1 ; $i<=10 ; $i++ ){
    echo $a * $i . " ";
}
