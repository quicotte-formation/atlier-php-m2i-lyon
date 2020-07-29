<?php

/*
 * Créer un tableau contenant des infos sur des personnes.
 *
 * Encoder les personnes suivantes:
 * vincent cassel 53    films: couleur pourpre, la haine
 * marion cotillard 44  films: taxi, batman
 * roschdy zem 54       films: chouchou, go fast, 36 quai des orfèvres
 *
 * Ensuite, récupérer les films de marion cotillard triés dans l'orde alpha.
 *
 * Récupérer également l'age de roschdy zem
 */

$acteurs = [
    'vincent cassel' => [ 'age' => 53, 'films' => ['couleur pourpre', 'la haine'] ],
    'marion cotillard' => [ 'age' => 44, 'films' => ['taxi', 'batman'] ],
    'roschdy zem' => [ 'age' => 54, 'films' => ['chouchou', 'go-gast', '36 quai des orfèvres'] ],
];

$filmsDeMarion = $acteurs['marion cotillard']['films'];
sort($filmsDeMarion);
$filmsDeMarion = implode(', ', $filmsDeMarion);
var_dump( $filmsDeMarion );

var_dump( $acteurs['roschdy zem']['age'] );