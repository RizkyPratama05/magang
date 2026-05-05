<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
$_SERVER['HTTP_HOST'] = 'localhost';
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';
require 'lib/server/config.php';
require 'lib/server/class.os.php';
require 'lib/server/class.database.php';
require 'modules/EntryDataPilah/EntryDataPilah.php';

$os = new Os();
$conn = $os->conn;

$stmt = $conn->prepare("SELECT session_id FROM sessions WHERE time_logout > NOW() ORDER BY time_updated DESC LIMIT 1");
$stmt->execute();
$sessid = $stmt->fetchColumn();

if ($sessid) {
    $_COOKIE[COOKIE_KEY] = $sessid;
    echo "Using session: $sessid\n";

    $obj = new EntryDataPilah();
    echo "Calling groupList:\n";
    $obj->ACTION_groupList();
    echo "\nCalling unitkerjaList2:\n";
    $obj->ACTION_unitkerjaList2();
} else {
    echo "No active session found.\n";
}
