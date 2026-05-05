<?php
require 'lib/server/config.php';
$db = new PDO('mysql:host='.DB_FW_HOST.';dbname='.DB_FW_NAME, DB_FW_USER, DB_FW_PASSWORD);
$s = $db->query('DESCRIBE reff_unit_kerja')->fetchAll(PDO::FETCH_ASSOC);
print_r($s);
