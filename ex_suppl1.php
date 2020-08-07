<?php

// 1. Afficher les éléments d'un tableau d'an l'ordre inverse.

// 2. Afficher une élément sur 2 d'un tableau ( 6 éléments )

// 3. Créer un tableau avec verbes, un tableau avec des sujets, et tableau avec compléments
// Afficher au hasard: un sujet, un verbe, un complément
// Ex: sujet:je verbe:manger complement:crapaud

// Générer indéfiniment des phrases jusqu'a obtenir la combinaison du premier sujet / premier verbe / premier cplt.
// and / or pour compléter condition

$sujets = ["je","bill clinton","woody allen"];
$verbes = ["chanter","jongler","danser","manger"];
$complement = ["la zoumba","du foie fras","la lune","les étoiles"];

$i = random_int(0, 2);
echo [ $i ];
