<?php
$file = 'dump-sigas-202604091311.sql';
$handle = fopen($file, "r");
$inTable = false;
$count = 0;
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        if (stripos($line, "INSERT INTO `data_pilah_cell`") !== false) {
            $inTable = true;
        }
        if ($inTable) {
            $count += substr_count($line, "'119'");
            if (strpos($line, ";") !== false && $count > 0) {
                // End of INSERT statement
                break;
            }
        }
    }
    fclose($handle);
}
echo "Count for '119' in data_pilah_cell: $count\n";
?>
