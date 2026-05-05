<?php
$_SERVER['HTTP_HOST'] = 'localhost';
require 'lib/server/config.php';
require 'lib/server/class.os.php';
$os = new Os();
$db = $os->conn;
$s = $db->query('DESCRIBE reff_unit_kerja')->fetchAll(PDO::FETCH_ASSOC);
print_r($s);
