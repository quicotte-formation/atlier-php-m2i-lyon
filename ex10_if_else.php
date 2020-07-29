<?php

/*
 * Exercice:
 * Générer 2 nombre aléat entre 1 et 10 ds des variables
 * Si $a < $b afficher 'plus petit', si >, afficher 'plus grand' si égal afficher 'égaux'
 */

$a = random_int(1,10);
$b = random_int(1,10);
echo "$a $b \n";
if($a<$b){
    echo "Plus petit";
}elseif($a>$b){
    echo "Plus grand";
}else{// Du coup, a et b ==
    echo "Egaux";
}