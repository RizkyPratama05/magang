<?php
$pdo = new PDO("mysql:host=localhost;dbname=sigas", "root", "");
$stmt = $pdo->query("SELECT * FROM modules WHERE module LIKE '%DataPilah%'");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($rows);
