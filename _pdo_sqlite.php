<?php

$pdo = new PDO("sqlite:sqlite.db");
$stm = $pdo->query("SELECT * FROM film");
$films = $stm->fetchAll();
var_dump( $films );