<?php
$_SERVER['HTTP_HOST'] = 'localhost';
require 'lib/server/config.php';
require 'lib/server/class.os.php';

$os = new Os();
$conn = $os->conn;

echo "Table actions:\n";
$stmt = $conn->prepare("DESCRIBE actions");
$stmt->execute();
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

echo "\nTable modules:\n";
$stmt = $conn->prepare("DESCRIBE modules");
$stmt->execute();
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
