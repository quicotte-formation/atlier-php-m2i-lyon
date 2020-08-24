<?php

// Avec MySQL
$maVariablePDO = new PDO("sqlite:allocinetv.db");
$monStatement = $maVariablePDO->query("SELECT * FROM genre");
$tableauJoueurs = $monStatement->fetchAll();

echo json_encode( $tableauJoueurs );

// Avec SQLITE
/*
$pdo = new PDO("sqlite:allocinetv.db");
$stm = $pdo->query("SELECT * FROM genre");
$series = $stm->fetchAll();

echo json_encode($series);
*/