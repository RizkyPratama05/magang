<?php
$conn = new mysqli('localhost', 'root', '', 'sigas');
$kode = '119';

echo "Checking Kode $kode in backup:\n";

$res = $conn->query("SELECT COUNT(*) FROM data_pilah_baris_backup WHERE kode_data_pilah = '$kode'");
echo "  Baris count in backup: " . $res->fetch_row()[0] . "\n";

$res = $conn->query("SELECT COUNT(*) FROM data_pilah_kolom_backup WHERE kode_data_pilah = '$kode'");
echo "  Kolom count in backup: " . $res->fetch_row()[0] . "\n";

$conn->close();
?>
