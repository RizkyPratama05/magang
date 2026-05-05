<?php
/**
 * Script untuk mengekstrak dan mengimpor data_pilah dari dump SQL.
 * Memperbaiki logika pembacaan multiline.
 */

$inputFile = 'dump-sigas-202604091311.sql';
$outputFile = 'extracted_data_pilah.sql';

$tables = ['data_pilah', 'data_pilah_baris', 'data_pilah_kolom', 'data_pilah_cell'];
$handle = fopen($inputFile, "r");
$out = fopen($outputFile, "w");

if (!$handle || !$out) {
    die("Gagal membuka file.");
}

fwrite($out, "SET FOREIGN_KEY_CHECKS = 0;\n");
foreach ($tables as $table) {
    fwrite($out, "TRUNCATE TABLE `$table`;\n");
}

$inTargetTable = false;
while (($line = fgets($handle)) !== false) {
    $foundStart = false;
    foreach ($tables as $table) {
        if (stripos($line, "INSERT INTO `$table`") !== false) {
            $inTargetTable = true;
            $foundStart = true;
            break;
        }
    }
    
    if ($inTargetTable) {
        fwrite($out, $line);
        // Check if the statement ends with ;
        // We need to be careful about ; inside strings, but for mysqldump, it's usually at the end of the line.
        if (preg_match('/;\s*$/', $line)) {
            $inTargetTable = false;
        }
    }
}

fwrite($out, "SET FOREIGN_KEY_CHECKS = 1;\n");
fclose($handle);
fclose($out);

echo "Data berhasil diekstrak ke $outputFile. Menjalankan impor...\n";

// Execute the extracted SQL
// We need to load config for DB credentials
$_SERVER['HTTP_HOST'] = 'localhost';
$_SERVER['SERVER_NAME'] = 'localhost';
$_SERVER['SERVER_ADDR'] = '127.0.0.1';
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';
require_once('lib/server/config.php');

$cmd = "mysql -u " . DB_DATA_USER . (DB_DATA_PASSWORD ? " -p" . DB_DATA_PASSWORD : "") . " " . DB_DATA_NAME . " < " . $outputFile;
system($cmd, $retval);

if ($retval === 0) {
    echo "Impor berhasil!\n";
} else {
    echo "Impor gagal dengan kode: $retval\n";
}
?>
