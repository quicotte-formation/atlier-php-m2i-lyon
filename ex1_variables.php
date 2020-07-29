<?php

$a = "vert";
$b = 123;

$c = $a;
$a = $b;
$b = $c;

echo $a . " " . $b;