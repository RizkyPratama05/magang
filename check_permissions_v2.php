<?php
$_SERVER['HTTP_HOST'] = 'localhost';
require 'lib/server/config.php';
require 'lib/server/class.os.php';

$os = new Os();
$conn = $os->conn;

echo "Groups:\n";
$stmt = $conn->prepare("SELECT * FROM `groups` ");
$stmt->execute();
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

echo "\nGroup Has Actions (sample):\n";
$stmt = $conn->prepare("SELECT * FROM `group_has_actions` LIMIT 10");
$stmt->execute();
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
