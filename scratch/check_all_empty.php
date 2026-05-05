<?php
$conn = new mysqli('localhost', 'root', '', 'sigas');
$res = $conn->query("SELECT kode_data_pilah, judul_data_pilah FROM data_pilah");
while ($row = $res->fetch_assoc()) {
    $kode = $row['kode_data_pilah'];
    $cnt = $conn->query("SELECT COUNT(*) FROM data_pilah_cell WHERE kode_data_pilah = '$kode'")->fetch_row()[0];
    if ($cnt == 0) {
        echo "EMPTY: [$kode] " . $row['judul_data_pilah'] . "\n";
    }
}
?>
