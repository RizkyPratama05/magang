<?php
$conn = new mysqli('localhost', 'root', '', 'sigas');
$res = $conn->query("SELECT kode_data_pilah, judul_data_pilah FROM data_pilah WHERE judul_data_pilah LIKE '%INDEKS PEMBANGUNAN MANUSIA%'");
while ($row = $res->fetch_assoc()) {
    echo "Judul: " . $row['judul_data_pilah'] . "\n";
    echo "Kode: " . $row['kode_data_pilah'] . "\n";
    
    $kode = $row['kode_data_pilah'];
    
    $res2 = $conn->query("SELECT COUNT(*) FROM data_pilah_baris WHERE kode_data_pilah = '$kode'");
    echo "  Baris count: " . $res2->fetch_row()[0] . "\n";
    
    $res2 = $conn->query("SELECT COUNT(*) FROM data_pilah_kolom WHERE kode_data_pilah = '$kode'");
    echo "  Kolom count: " . $res2->fetch_row()[0] . "\n";
    
    $res2 = $conn->query("SELECT COUNT(*) FROM data_pilah_cell WHERE kode_data_pilah = '$kode'");
    echo "  Cell count: " . $res2->fetch_row()[0] . "\n";
}
?>
