<?php

$pdo = new PDO("sqlite:allocinetv.db");
$stm = $pdo->query("SELECT * FROM serie LIMIT 50");
$series = $stm->fetchAll();

echo json_encode($series);