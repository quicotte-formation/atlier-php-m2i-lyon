<?php

// Renvoyer en json le résultat de la requête "SELECT * FROM crypto"

$maVariablePDO = new PDO("sqlite:cryptos.db");
$monStatement = $maVariablePDO->query("SELECT * FROM cours");
$tableauJoueurs = $monStatement->fetchAll();

echo json_encode( $tableauJoueurs );