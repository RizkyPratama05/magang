<?php
$_SERVER['HTTP_HOST'] = 'localhost';
require 'lib/server/config.php';
require 'lib/server/class.os.php';

$os = new Os();
$conn = $os->conn;

$stmt = $conn->prepare("SELECT * FROM modules");
$stmt->execute();
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
