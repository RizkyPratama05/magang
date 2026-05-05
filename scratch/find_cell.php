<?php
$file = 'dump-sigas-202604091311.sql';
$handle = fopen($file, "r");
$found = false;
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        if (stripos($line, "INSERT INTO `data_pilah_cell`") !== false) {
            echo "FOUND: " . substr($line, 0, 100) . "...\n";
            $found = true;
            // Print next 5 lines
            for ($i = 0; $i < 5; $i++) {
                echo fgets($handle);
            }
            break;
        }
    }
    fclose($handle);
}
if (!$found) echo "NOT FOUND\n";
?>
