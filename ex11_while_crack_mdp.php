<?php

/**
 * a. Avec une boucle while, vous allez générer un nombre aléat entre 1 et 9999.
 * Vous sortez lorsque ne nombre aléat est égal au code secret.
 * ( random_int )
 * Afficher nombre d'essais.
 */

$codeSecret = 1234;
$codeTeste = - 1;

while( $codeTeste != $codeSecret ){

    $codeTeste = random_int(1, 9999);
}
echo "Trouvé !";
