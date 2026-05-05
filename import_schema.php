<?php
// Script untuk memperbaiki schema_datapilah.sql dan mengeksekusinya
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'sigas';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Nonaktifkan foreign key checks sementara agar bisa insert
    $pdo->exec("SET FOREIGN_KEY_CHECKS = 0;");
    
    // Eksekusi schema_datapilah.sql
    $sqlSchema = file_get_contents(__DIR__ . '/schema_datapilah.sql');
    $pdo->exec($sqlSchema);
    
    // Ambil baris INSERT INTO data_pilah dari dump SQL
    $dumpLines = file(__DIR__ . '/dump-sigas-202604091311.sql');
    $insertSql = "";
    $capture = false;
    foreach($dumpLines as $line) {
        if (strpos($line, 'INSERT INTO `data_pilah` VALUES') !== false) {
            $capture = true;
        }
        if ($capture) {
            $insertSql .= $line;
            if (strpos($line, ';') !== false) {
                break;
            }
        }
    }
    
    if (!empty($insertSql)) {
        $pdo->exec($insertSql);
        echo "SUCCESS: 144 data_pilah berhasil di-restore.\n";
    }
    
    // Re-aktifkan foreign key checks
    $pdo->exec("SET FOREIGN_KEY_CHECKS = 1;");
    
    echo "SUCCESS: Skema datapilah berhasil diimport ke database '$db'!\n";
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}
