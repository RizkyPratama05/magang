<?php
$_SERVER['HTTP_HOST'] = 'localhost';
require 'lib/server/config.php';
require 'lib/server/class.os.php';

$os = new Os();
$conn = $os->conn;

echo "Table action:\n";
$stmt = $conn->prepare("DESCRIBE action");
$stmt->execute();
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

echo "\nTable module:\n";
$stmt = $conn->prepare("DESCRIBE module");
$stmt->execute();
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
