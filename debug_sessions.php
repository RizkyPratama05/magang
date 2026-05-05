<?php
require 'lib/server/config.php';
$db = new PDO('mysql:host='.DB_FW_HOST.';dbname='.DB_FW_NAME, DB_FW_USER, DB_FW_PASSWORD);
$s = $db->query('SELECT session_id, time_updated, time_logout FROM sessions ORDER BY time_updated DESC LIMIT 5')->fetchAll(PDO::FETCH_ASSOC);
print_r($s);
echo "Current Time: " . date('Y-m-d H:i:s') . "\n";
