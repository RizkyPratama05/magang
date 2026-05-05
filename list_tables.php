<?php
$_SERVER['HTTP_HOST'] = 'localhost';
require 'lib/server/config.php';
require 'lib/server/class.os.php';
$os = new Os();
$db = $os->conn;
$s = $db->query('SHOW TABLES')->fetchAll(PDO::FETCH_COLUMN);
print_r($s);
