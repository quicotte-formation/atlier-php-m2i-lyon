<?php

/**
 * Faire deviner un nombre aléatoire entre 1 et 100 à l'utilisateur.
 *
 * Ex:
 *
 * Entrez un nombre: 40
 * Plus grand !
 * Entrez un nombre: 60
 * Plus petit !
 * Entrez un nombre: 50
 * Plus grand !
 * Entrez un nombre: 57
 * OUI VOUS AVEZ GAGNE, LE NOMBRE RECHERCHE ETAIT BIEN 57.
 * Voulez-vous recommencer la partie ? ( O / N )
 * O
 *
 * ... On recommence
 */

// Boucle nouvelles parties
do{

    // Detéermine nbre secret
    $secret = random_int(1, 100);

    // Boucle de jeu
    do{
        // Demande un nbre à l'util
        echo "Entrez un nombre : ";
        $n = readline();

        // Afficher > ou < :  n< n> n==
        if( $secret > $n ){
            echo "Plus grand\n";
        }elseif( $secret < $n ){
            echo "Plus petit\n";
        }
    }while( $secret != $n );

    echo "Bravo vous avez trouvé, le nombre était bien $secret !";

    // Demande à l'utiliser si veut continuer
    echo "Voulez-vous recommencer ? O/N : ";
    $choix = readline();
}while( $choix=="O" );