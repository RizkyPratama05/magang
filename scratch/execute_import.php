<?php
/**
 * Script untuk mengimpor data dari file SQL menggunakan mysqli.
 */

$_SERVER['HTTP_HOST'] = 'localhost';
$_SERVER['SERVER_NAME'] = 'localhost';
$_SERVER['SERVER_ADDR'] = '127.0.0.1';
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';
require_once('lib/server/config.php');

$conn = new mysqli(DB_DATA_HOST, DB_DATA_USER, DB_DATA_PASSWORD, DB_DATA_NAME);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sqlFile = 'extracted_data_pilah.sql';
if (!file_exists($sqlFile)) {
    die("File $sqlFile tidak ditemukan.");
}

echo "Memulai impor dari $sqlFile...\n";

$sql = file_get_contents($sqlFile);
if ($conn->multi_query($sql)) {
    do {
        // Clear results
        if ($result = $conn->store_result()) {
            $result->free();
        }
    } while ($conn->next_result());
    echo "Impor berhasil!\n";
} else {
    echo "Impor gagal: " . $conn->error . "\n";
}

$conn->close();
?>
