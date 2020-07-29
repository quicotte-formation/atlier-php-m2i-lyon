<?php

// Créer une liste de films sous forme de tableau associatif
// clé: titre du film, valeur, caractéristiques du film ( tab assoc avec realisateur,acteurs,annee de sortie )
// Ajouter 3 films dedans: dracula, frankenstein et kung fu panda
// Affichage realisateur du film 'kung fu panda'

$films = [
    'dracula' => ['real'=>'Coppola', 'acteurs'=>'Keanu', 'anneeSortie'=>2000],
    'frankenstein' => ['real'=>'Sais pô?!', 'acteurs'=>'pareil', 'anneeSortie'=>2000],
    'kung fu panda' => ['real'=>'Pixar', 'acteurs'=>'ya pas', 'anneeSortie'=>2001]
];

echo $films['kung fu panda']['real'];