<?php

$n = 11117;
$premier = true;
for($i=2;$i<$n;$i++){
    if( $n % $i   ==   0 ){# Divisible
        $premier=false;
    }
}

if( $premier==true ){
    echo "Premier";
}else{
    echo "Pas premier";
}