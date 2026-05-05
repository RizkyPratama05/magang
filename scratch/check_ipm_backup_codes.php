<?php
$conn = new mysqli('localhost', 'root', '', 'sigas');
$res = $conn->query("SELECT kode_data_pilah, judul_data_pilah FROM data_pilah_backup WHERE judul_data_pilah LIKE '%INDEKS PEMBANGUNAN MANUSIA%'");
while ($row = $res->fetch_assoc()) {
    echo "Backup Judul: " . $row['judul_data_pilah'] . " | Kode: " . $row['kode_data_pilah'] . "\n";
}
?>
