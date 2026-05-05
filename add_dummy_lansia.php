<?php
$_SERVER['HTTP_HOST'] = 'localhost';
require 'lib/server/config.php';
require 'lib/server/class.os.php';

$os = new Os();
$conn = $os->conn;

// Find kode_data_pilah
$sql = "SELECT kode_data_pilah, judul_data_pilah, instansi FROM data_pilah WHERE instansi LIKE '%Dinas Sosial%' AND judul_data_pilah LIKE '%LANSIA%'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$dataPilah = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($dataPilah);

if(count($dataPilah) > 0) {
    $kode = $dataPilah[0]['kode_data_pilah'];
    
    // Get rows
    $sqlB = "SELECT * FROM data_pilah_baris WHERE kode_data_pilah = :kode";
    $stmtB = $conn->prepare($sqlB);
    $stmtB->execute([':kode' => $kode]);
    $baris = $stmtB->fetchAll(PDO::FETCH_ASSOC);
    
    // Get columns
    $sqlK = "SELECT * FROM data_pilah_kolom WHERE kode_data_pilah = :kode";
    $stmtK = $conn->prepare($sqlK);
    $stmtK->execute([':kode' => $kode]);
    $kolom = $stmtK->fetchAll(PDO::FETCH_ASSOC);
    
    echo "Baris count: " . count($baris) . "\n";
    echo "Kolom count: " . count($kolom) . "\n";
    
    // Insert dummy data for 2016 and 2024
    if(count($baris) > 0 && count($kolom) > 0) {
        $sqlInsert = "INSERT INTO data_pilah_cell (kode_data_pilah, kode_baris, kode_kolom, tahun, val) 
                      VALUES (:kode_data, :kode_baris, :kode_kolom, :tahun, :val) 
                      ON DUPLICATE KEY UPDATE val = :val2";
        $stmtIns = $conn->prepare($sqlInsert);
        
        $years = [2016, 2024];
        $count = 0;
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
                    $count++;
                }
            }
        }
        echo "Inserted/Updated $count cells.\n";
    }
}
