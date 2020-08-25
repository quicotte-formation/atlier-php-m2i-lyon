<?php

$sql = "SELECT  c.symbole, c.nom, AVG(co.pct_variation_24_h) variation_moyenne
        FROM    cours co
                JOIN crypto c on co.crypto_id = c.id
        WHERE   co.datetime_cours>DATE('now', '-7 days')
        GROUP BY c.id";
$pdo = new PDO('sqlite:cryptos.db');
$stm = $pdo->query($sql);
$tabRes = $stm->fetchAll();
echo json_encode($tabRes);