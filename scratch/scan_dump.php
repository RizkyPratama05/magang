<?php
$file = 'dump-sigas-202604091311.sql';
$handle = fopen($file, "r");
$counts = [
    'data_pilah' => 0,
    'data_pilah_baris' => 0,
    'data_pilah_kolom' => 0,
    'data_pilah_cell' => 0
];

if ($handle) {
    while (($line = fgets($handle)) !== false) {
        foreach ($counts as $table => $count) {
            if (strpos($line, "INSERT INTO `$table`") !== false) {
                // Count occurrences of "),(" or "), (" to estimate rows
                $counts[$table] += substr_count($line, "),(") + 1;
            }
        }
    }
    fclose($handle);
}

foreach ($counts as $table => $count) {
    echo "$table: $count rows\n";
}
?>
