<?php
$_SERVER['HTTP_HOST'] = 'localhost';
require 'lib/server/config.php';
require 'lib/server/class.os.php';
$os = new Os();
$db = $os->conn;

echo "--- data_pilah ---\n";
print_r($db->query("SELECT * FROM data_pilah")->fetchAll(PDO::FETCH_ASSOC));

echo "\n--- All Tables ---\n";
print_r($db->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN));
