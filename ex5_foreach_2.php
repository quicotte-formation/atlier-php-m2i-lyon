<?php

/*
 * Tableau  $acteurs['lou doyon', 'omar sy', 'daniel auteuil']
 * a. Afficher chaque nom en majuscules ( strtoupper )
 * b. Créer un nouveau tableau $acteursEnMajuscules, le remplir ds la boucle, puis var_dump
 */

$acteurs = ['lou doyon', 'omar sy', 'daniel auteuil'];
$acteursEnMajuscules = [];
foreach ($acteurs as $acteur){
    $acteursEnMajuscules[] = strtoupper( $acteur );
}

var_dump( $acteursEnMajuscules );
