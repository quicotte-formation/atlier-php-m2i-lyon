<?php

/*
 * tableau $nombres: 1 2 3 4 5
 * a. Afficher chacun au cube ( avec boucle foreach )
 * b. Créer un nouveau tableau appelé $cubes, qui contiendra le cube de chaque élément du tableau $nombres
 *    var_dumb du nouveau tableay $cubes
 */

$nombres = [1,2,3,4,5];
$cubes = [];
foreach ($nombres as $nombreAct){
    $cubes[] = $nombreAct * $nombreAct * $nombreAct;
}

var_dump($cubes);