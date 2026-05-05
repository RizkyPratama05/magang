<?php
$_SERVER['HTTP_HOST'] = 'localhost';
require 'lib/server/config.php';
require 'lib/server/class.os.php';

$os = new Os();
$conn = $os->conn;

// Find the kode_data_pilah
$sql = "SELECT kode_data_pilah, judul_data_pilah, instansi FROM data_pilah WHERE instansi LIKE '%Perpusarsip%' AND judul_data_pilah LIKE '%Informasi%'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$dataPilah = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "Data Pilah found:\n";
print_r($dataPilah);

if (count($dataPilah) > 0) {
    $kode = $dataPilah[0]['kode_data_pilah'];
    
    // Check years in cell data
    $sqlCell = "SELECT tahun, count(*) as total_cell FROM data_pilah_cell WHERE kode_data_pilah = :kode GROUP BY tahun ORDER BY tahun DESC";
    $stmtC = $conn->prepare($sqlCell);
    $stmtC->execute([':kode' => $kode]);
    $years = $stmtC->fetchAll(PDO::FETCH_ASSOC);
    
    echo "\nData available for years:\n";
    print_r($years);
}
