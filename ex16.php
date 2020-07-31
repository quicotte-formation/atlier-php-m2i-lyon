<?php

function puissance($nombre, $exposant)
{
    $res = 1;
    for($i=0;$i<$exposant;$i++){
        $res *= $nombre;
    }

    return $res;
}

function cube($n){

    return puissance($n, 3);
}

echo puissance(2,8);
echo "\n";
echo cube(2);