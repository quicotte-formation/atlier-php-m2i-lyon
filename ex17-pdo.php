<?php

$pdo = new PDO("sqlite:allocinetv.db");
$stm = $pdo->query("SELECT * FROM genre");
$series = $stm->fetchAll();

echo json_encode($series);