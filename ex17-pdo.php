<?php

$maVariablePDO = new PDO("sqlite:allocinetv.db");
$monStatement = $maVariablePDO->query("SELECT * FROM genre");
$tableauJoueurs = $monStatement->fetchAll();

echo json_encode( $tableauJoueurs );