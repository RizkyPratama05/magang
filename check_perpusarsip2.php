<?php
$_SERVER['HTTP_HOST'] = 'localhost';
require 'lib/server/config.php';
require 'lib/server/class.os.php';

$os = new Os();
$conn = $os->conn;
$kode = 137;

$sql = "SELECT * FROM data_pilah_baris WHERE kode_data_pilah = :kode";
$stmt = $conn->prepare($sql);
$stmt->execute([':kode' => $kode]);
echo "Baris:\n";
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

$sqlK = "SELECT * FROM data_pilah_kolom WHERE kode_data_pilah = :kode";
$stmtK = $conn->prepare($sqlK);
$stmtK->execute([':kode' => $kode]);
echo "Kolom:\n";
print_r($stmtK->fetchAll(PDO::FETCH_ASSOC));
