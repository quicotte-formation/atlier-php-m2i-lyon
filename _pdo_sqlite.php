<?php

$pdo = new PDO("sqlite:allocinetv.db");
$stm = $pdo->query("SELECT titre, annee, timewatch FROM serie LIMIT 50");
$series = $stm->fetchAll(PDO::FETCH_OBJ);

