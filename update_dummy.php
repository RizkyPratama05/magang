<?php
$_SERVER['HTTP_HOST'] = 'localhost';
require 'lib/server/config.php';
require 'lib/server/class.os.php';

$os = new Os();
$conn = $os->conn;
$kode = '01';

$sql = "UPDATE data_pilah_kolom SET nama_kolom = 'Laki-Laki', header_kolom = 'Laki-Laki' WHERE kode_data_pilah = '01' AND nama_kolom = 'QWERTY'";
$conn->exec($sql);

$sqlIns = "INSERT INTO data_pilah_kolom (kode_data_pilah, kode_kolom, nama_kolom, header_kolom, aktif) VALUES ('01', 'P', 'Perempuan', 'Perempuan', 1)";
try {
    $conn->exec($sqlIns);
} catch (Exception $e) {}

// Insert data for 'Perempuan' column as well
$sqlK = "SELECT * FROM data_pilah_kolom WHERE kode_data_pilah = :kode";
$stmtK = $conn->prepare($sqlK);
$stmtK->execute([':kode' => $kode]);
$kolom = $stmtK->fetchAll(PDO::FETCH_ASSOC);

$sqlB = "SELECT * FROM data_pilah_baris WHERE kode_data_pilah = :kode";
$stmtB = $conn->prepare($sqlB);
$stmtB->execute([':kode' => $kode]);
$baris = $stmtB->fetchAll(PDO::FETCH_ASSOC);

$sqlInsert = "INSERT INTO data_pilah_cell (kode_data_pilah, kode_baris, kode_kolom, tahun, val) 
              VALUES (:kode_data, :kode_baris, :kode_kolom, :tahun, :val) 
              ON DUPLICATE KEY UPDATE val = :val2";
$stmtIns = $conn->prepare($sqlInsert);

$years = [2016, 2024, 2025];
foreach($years as $y) {
    foreach($baris as $b) {
        foreach($kolom as $k) {
            $dummyVal = rand(10, 200);
            $stmtIns->execute([
                ':kode_data' => $kode,
                ':kode_baris' => $b['kode_baris'],
                ':kode_kolom' => $k['kode_kolom'],
                ':tahun' => $y,
                ':val' => $dummyVal,
                ':val2' => $dummyVal
            ]);
        }
    }
}
echo "Updated kolom and inserted new dummy data.\n";
