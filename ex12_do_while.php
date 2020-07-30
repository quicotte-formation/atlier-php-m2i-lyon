<?php

/**
 * Afficher un menu et demander à l'utilisateur de faire un choix.
 * Tant que l'utilisateur n'a pas cliquer sur "Q", on réaffiche le menu.
 * A Afficher 2 au carré
 * B Affiche 2 au cube
 * Q Quitte
 * a. Avec un while:
 * b. Avec un do .. while
 */
// Comme on doit afficher le menu au moins une fois pour savoir
// ce que veux faire l'utilisateur, on part donc sur du do..while et pas sur un while.
do{
    // Affiche menu
    echo "Menu\n";
    echo "****\n";
    echo "A Afficher 2 au carré\n";
    echo "B Affiche 2 au cube\n";
    echo "Q Quitte\n";
    echo "Votre choix : ";
    $choix = readline();

    // En fonction du choix, execute l'action voulue
    if( $choix=="A" ){
        echo "Carré de 2 : 4\n";
        readline();
    }elseif( $choix=="B" ){
        echo "Cube de 2 : 8\n";
        readline();
    }
}while( $choix!="Q" );
echo "Fin boucle";