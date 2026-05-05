<?php
$_POST['Module'] = 'DataPilahBaris';
$_POST['option'] = 'ACTION';
$_POST['action'] = 'getKodePilah';

// Simulate the environment
$_SERVER['HTTP_HOST'] = 'localhost';
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';

// Include service.php logic but catch output
ob_start();
try {
    include 'service.php';
} catch (Exception $e) {
    echo "\nCaught Exception: " . $e->getMessage();
} catch (Error $e) {
    echo "\nCaught Error: " . $e->getMessage();
}
$output = ob_get_clean();

echo "Output:\n";
echo $output;
