<?php

// Chaine de caractère: "belgique, france, angleterre, pays-bas" ( copier-coller )
// a. En utilisant les fonctioncs qui vont bien, afficher cette chaine par ordre alphabétique
// b. Afficher une chaine avec le dernier et le premier pays pour les pays que vous classerez d'abord
//    dans l'ordre alphabétique inverse => doit donner: "pays-bas***angleterre"
// ! PAS DE CONCATENATION

// a.
$str = "belgique, france, angleterre, pays-bas";
$pays = explode(", ",$str);
sort($pays);
$str = implode(", ", $pays);
var_dump( $str );

// b.
$pays = array_reverse($pays);
array_splice($pays, 1, 2);
$str = implode("***", $pays);
var_dump($str);