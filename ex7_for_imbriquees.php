<?php

/*
 * Avec une boucle
 * a.   Créer un $tableau de 10 elements.
 *      Chaque élément sera un tableau de 5 nombres aléatoires compris entre 1 et 100
 *  $tableau = []
 *        $ligne = []
 *        $ligne[] = le nbre aléat
 */

$feuille = [];
for($i=0;$i<10;$i++){
    $ligne = [];
    for($j=0;$j<5;$j++){
        $ligne[] = random_int( 1,100 );
    }
    $feuille[] = $ligne;
}

foreach ($feuille as $ligne){
    foreach($ligne as $cellule){
        echo $cellule . " ";
    }
    echo "\n";
}