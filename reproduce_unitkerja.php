<?php
$_SERVER['HTTP_HOST'] = 'localhost';
require 'lib/server/config.php';
require 'lib/server/class.os.php';

$os = new Os();
$conn = $os->conn;

$stmt = $conn->prepare("SELECT session_id FROM sessions WHERE time_logout > NOW() ORDER BY time_updated DESC LIMIT 1");
$stmt->execute();
$sessid = $stmt->fetchColumn();

if ($sessid) {
    $_COOKIE[COOKIE_KEY] = $sessid;
    
    $_POST['Module'] = 'EntryDataPilah';
    $_POST['option'] = 'ACTION';
    $_POST['action'] = 'unitkerjaList2';
    $_SERVER['REMOTE_ADDR'] = '127.0.0.1';

    ob_start();
    include 'service.php';
    $output = ob_get_clean();
    echo "Output:\n$output\n";
} else {
    echo "No active session found.\n";
}
