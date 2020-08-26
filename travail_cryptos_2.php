<?php

$symbole = $_REQUEST['symbole'];

$sql = "SELECT  date(c.datetime_cours) date_jour, avg(c.valeur) valeur
FROM    cours c
        JOIN crypto c2 on c.crypto_id = c2.id
WHERE   c2.symbole='$symbole'
GROUP BY date_jour";

$pdo = new PDO('sqlite:cryptos.db');
$stm = $pdo->query( $sql );
echo json_encode( $stm->fetchAll() );