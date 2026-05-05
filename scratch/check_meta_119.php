<?php
$file = 'dump-sigas-202604091311.sql';
$handle = fopen($file, "r");
$tables = ['data_pilah_baris', 'data_pilah_kolom'];
foreach ($tables as $table) {
    $count = 0;
    $inTable = false;
    rewind($handle);
    while (($line = fgets($handle)) !== false) {
        if (stripos($line, "INSERT INTO `$table`") !== false) {
            $inTable = true;
        }
        if ($inTable) {
            $count += substr_count($line, "'119'");
            if (strpos($line, ";") !== false && $inTable) {
                if ($count > 0) break;
                $inTable = false; // Move to next INSERT for same table if any
            }
        }
    }
    echo "Count for '119' in $table: $count\n";
}
fclose($handle);
?>
